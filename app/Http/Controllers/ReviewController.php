<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'is_anonymous' => $request->has('is_anonymous'),
        ]);

        return back()->with('success', 'Отзвыв добавлен успешно');
    }



    public function index()
    {

        $userId = auth()->id(); // Получаем ID текущего пользователя
        $reviews = Review::where('user_id', $userId)->get();

        return view('reviews.index', compact('reviews'));
    }



    public function destroy($id)
    {
        $review= Review::findOrFail($id);
        if (auth()->id() !== $review->user_id) {
            return back()->with('error', 'У вас нет прав для редактирования этого отзыва.');
        }
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Отзыв успешно удален.');
    }


    public function edit($id)
    {
        $review = Review::findOrFail($id); // Загружаем отзыв для редактирования


        if (auth()->id() !== $review->user_id) {
            return back()->with('error', 'У вас нет прав для редактирования этого отзыва.');
        }

        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::findOrFail($id);


        if (auth()->id() !== $review->user_id) {
            return back()->with('error', 'У вас нет прав для обновления этого отзыва.');
        }

        $review->update([
            'comment' => $request->comment,
            'rating' => $request->rating,
            'is_anonymous' => $request->has('is_anonymous'),
        ]);

        return redirect()->route('reviews.index')->with('success', 'Отзыв успешно обновлён!');
    }



}
