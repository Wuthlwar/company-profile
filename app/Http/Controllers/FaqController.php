<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqQans;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::with(['faqQans' => function($query) {
            $query->orderBy('updated_at', 'desc');
        }])->orderBy('updated_at', 'desc')->paginate(5);

        return view('admins.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $faq = Faq::create([
            'title' => $request['title'],
            'content' => $request['content'],
        ]);

        $questions = $request->input('question');
        $answers = $request->input('ans');

        if ($questions && $answers) {
            foreach ($questions as $index => $question) {
                FaqQans::create([
                    'faq_id' => $faq->id,
                    'question' => $question,
                    'answer' => $answers[$index],
                ]);
            }
        }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'FAQ Form',
            'tracking' => 'FAQ Created',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'Successfully saved...');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // $questions = $request->input('question');
        // $answers = $request->input('ans');

        // if ($questions && $answers) {
        //     foreach ($questions as $index => $question) {
        //         $faqQans = FaqQans::updateOrCreate(
        //             ['faq_id' => $faq->id, 'question' => $question],
        //             ['answer' => $answers[$index]]
        //         );
        //     }
        // }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'FAQ Form',
            'tracking' => 'FAQ Updated',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'FAQ updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $faq = Faq::findOrFail($id);

        $faq->faqQans()->delete();

        $faq->delete();


        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'FAQ Form',
            'tracking' => 'FAQ Deleted',
            'ip' => request()->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'FAQ deleted successfully.');
        }

        public function updateQuestion(Request $request, $id)
        {

            $request->validate([
                'question' => 'required|string|max:255',
                'ans' => 'required|string',
            ]);


            $faqQ = FaqQans::findOrFail($id);


            $faqQ->update([
                'question' => $request->input('question'),
                'answer' => $request->input('ans'),
            ]);

            Logs::create([
                'name' => Auth()->user()->name,
                'email' => Auth()->user()->email,
                'form_name' => 'FAQ for question and answer Form',
                'tracking' => 'FAQ for question and answer Updated',
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);

            // Redirect back with success message
            return back()->with('success', 'FAQ updated successfully.');
        }


        public function destroyQuestion($id)
            {

                $faqQ = FaqQans::findOrFail($id);
                $faqQ->delete();

                Logs::create([
                    'name' => Auth()->user()->name,
                    'email' => Auth()->user()->email,
                    'form_name' => 'FAQ for question and answer Form',
                    'tracking' => 'FAQ for question and answer Deleted',
                    'ip' => request()->ip(),
                    'date' => now()->format('Y-m-d'),
                ]);

                return back()->with('success', 'FAQ question and answer deleted successfully.');
            }

            public function AddagainQuestion(Request $request)
            {
                $faq = FaqQans::create([
                    'faq_id' => $request['id'],
                    'question' => $request['que'],
                    'answer' => $request['ansr'],
                ]);
                return back()->with('success', 'Add question and answer successfully.');

            }

        public function searchFaq(Request $request)
                {
            $query = Faq::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $startDate = $request->input('start_date');
                $endDate = $request->input('end_date');
                $query->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate]);
            } elseif ($request->filled('start_date')) {
                $startDate = $request->input('start_date');
                $query->whereDate('created_at', $startDate);
            }


            if ($request->filled('title')) {
                $title = $request->input('title');
                $query->where('title', 'LIKE', '%' . $title . '%');
            }


            $faqs = $query->latest()->paginate(5);
            $faqs->appends($request->except('page'));

            return view('admins.faq.index', compact('faqs'));
        }



}
