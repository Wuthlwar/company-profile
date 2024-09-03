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
            $query->orderBy('id', 'desc');
        }])->orderBy('id', 'desc')->paginate(5);

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
    // public function store(Request $request)
    // {
    //     // dd($request->all());

    //     $faq = Faq::create([
    //         'title' => $request['title'],
    //         'content' => $request['content'],
    //     ]);

    //     $questions = $request->input('question');
    //     $answers = $request->input('ans');

    //     if ($questions && $answers) {
    //         foreach ($questions as $index => $question) {
    //             FaqQans::create([
    //                 'faq_id' => $faq->id,
    //                 'question' => $question,
    //                 'answer' => $answers[$index],
    //             ]);
    //         }
    //     }

    //     Logs::create([
    //         'name' => Auth()->user()->name,
    //         'email' => Auth()->user()->email,
    //         'form_name' => 'FAQ Form',
    //         'tracking' => 'FAQ Created',
    //         'ip' => $request->ip(),
    //         'date' => now()->format('Y-m-d'),
    //     ]);

    //     return back()->with('success', 'Successfully saved...');
    // }

    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'title_en' => 'required|string|max:255',
        'content_en' => 'required|string',
        'title_my' => 'required|string|max:255',
        'content_my' => 'required|string',
        'question_en.*' => 'required|string|max:255',
        'ans_en.*' => 'required|string',
        'question_my.*' => 'required|string|max:255',
        'ans_my.*' => 'required|string',
    ]);

    // Create a new FAQ
    $faq = new Faq();
    $faq->title_en = $request->input('title_en');
    $faq->content_en = $request->input('content_en');
    $faq->title_my = $request->input('title_my');
    $faq->content_my = $request->input('content_my');
    $faq->save();

    // Get the newly created FAQ ID
    $faqId = $faq->id;

    // Save English Questions and Answers
    if ($request->has('question_en') && is_array($request->input('question_en'))) {
        foreach ($request->input('question_en') as $index => $question) {
            $faqQan = new FaqQans();
            $faqQan->faq_id = $faqId;
            $faqQan->language = 'en'; // Assuming 'en' for English
            $faqQan->question = $question;
            $faqQan->answer = $request->input('ans_en')[$index];
            $faqQan->save();
        }
    }

    // Save Myanmar Questions and Answers
    if ($request->has('question_my') && is_array($request->input('question_my'))) {
        foreach ($request->input('question_my') as $index => $question) {
            $faqQan = new FaqQans();
            $faqQan->faq_id = $faqId;
            $faqQan->language = 'my'; // Assuming 'my' for Myanmar
            $faqQan->question = $question;
            $faqQan->answer = $request->input('ans_my')[$index];
            $faqQan->save();
        }
    }

    // Redirect with success message
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
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string',
            'title_my' => 'required|string|max:255',
            'content_my' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update([
            'title_en' => $request->input('title_en'),
            'content_en' => $request->input('content_en'),
            'title_my' => $request->input('title_my'),
            'content_my' => $request->input('content_my'),
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
                'question_ed' => 'required|string|max:255',
                'ans_ed' => 'required|string',
            ]);

            // dd($request->all());

            $faqQ = FaqQans::Find($id);
            // dd($faqQ);

            $faqQ->question = $request->question_ed;
            $faqQ->answer = $request->ans_ed;

            $faqQ->save();

            Logs::create([
                'name' => Auth()->user()->name,
                'email' => Auth()->user()->email,
                'form_name' => 'FAQ for question and answer Form',
                'tracking' => 'FAQ for question and answer Updated',
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);



            return back()->with('success', 'FAQ for question and answer updated successfully.');
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
                // dd($request->all());

                // $request->validate([
                //     'id' => 'required|exists:faqs,id',
                //     'que_en' => 'required|string|max:255',
                //     'ansr_en' => 'required|string',
                //     'que_my' => 'required|string|max:255',
                //     'ansr_my' => 'required|string',
                // ]);

                $faqQansEn = new FaqQans();
                $faqQansEn->faq_id = $request->input('id');
                $faqQansEn->language = 'en';
                $faqQansEn->question = $request->input('que_en');
                $faqQansEn->answer = $request->input('ansr_en');
                $faqQansEn->save();

                $faqQansMy = new FaqQans();
                $faqQansMy->faq_id = $request->input('id');
                $faqQansMy->language = 'my';
                $faqQansMy->question = $request->input('qum_my');
                $faqQansMy->answer = $request->input('ansr_my');
                $faqQansMy->save();



                Logs::create([
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'form_name' => 'FAQ Question and Answer Form',
                    'tracking' => 'FAQ Question and Answer added again',
                    'ip' => $request->ip(),
                    'date' => now()->format('Y-m-d'),
                ]);

                return back()->with('success', 'Added question and answer successfully.');
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
