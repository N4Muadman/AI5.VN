<?php

namespace App\Http\Controllers;

use App\Mail\CourseRegistrationMail;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPages = LandingPage::orderByDesc('id')->paginate(10);

        return view('admin.landing-pages.index', compact('landingPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LandingPage $landingPage)
    {
        return response()->json($landingPage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LandingPage $landingPage)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thambnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Generate unique slug
        $baseSlug = \Str::slug($request->title);
        $slug = $baseSlug;
        $counter = 1;

        // Check if slug exists (exclude current landing page)
        while (LandingPage::where('slug', $slug)->where('id', '!=', $landingPage->id)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $data = [
            'title' => $request->title,
            'slug' => $slug
        ];

        // Handle thumbnail upload
        if ($request->hasFile('thambnail')) {
            // Delete old thumbnail if exists
            if ($landingPage->thambnail && Storage::disk('public')->exists($landingPage->thambnail)) {
                Storage::disk('public')->delete($landingPage->thambnail);
            }

            $data['thambnail'] = $request->file('thambnail')->store('landing-pages', 'public');
        }

        $landingPage->update($data);

        return redirect()->back()->with('success', 'Landing Page đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }

    public function register(Request $request, $landingPageId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'file' => 'nullable|array',
            'file.*' => 'file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png', // Max 10MB mỗi file
        ]);

        $landingPage = LandingPage::findOrFail($landingPageId);

        $attachmentPaths = [];

        // Xử lý file upload
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $path = $file->store('course-attachments');

                $attachmentPaths[] = [
                    'path' => storage_path('app/private/' . $path),
                    'name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'mime' => $file->getMimeType()
                ];
            }
        }

        // Gửi email với attachments
        Mail::to('admin@hotrodoan.vn')->send(
            new CourseRegistrationMail($request->all(), $landingPage, $attachmentPaths)
        );

        return redirect()->back()->with('success', 'Đăng kí khóa học thành công!');
    }
}
