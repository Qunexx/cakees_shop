<?php

namespace App\Http\Controllers;

use App\Models\NewsSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsSliderController extends Controller
{
    public function index()
    {
        $sliders = NewsSlider::all();
        return view('admin.slider.index', compact('sliders'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        NewsSlider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return back()->with('success', 'Слайд успешно добавлен.');
    }

    public function destroy($id)
    {
        $slider = NewsSlider::findOrFail($id);


        if (Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();

        return back()->with('success', 'Слайд успешно удален.');
    }

    public function edit($id)
    {
        $slider = NewsSlider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slider = NewsSlider::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);


            if (file_exists(public_path('images/' . $slider->image))) {
                unlink(public_path('images/' . $slider->image));
            }

            $slider->image = $imageName;
        }

        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $slider->image,
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Слайд успешно обновлен.');
    }
}
