<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Terms, privacy information, and membership policy for the PRO 1 Membership application.">
    <meta name="robots" content="index, follow">
    <title>PRO 1 Membership Policy</title>
    <link rel="icon" href="{{ asset('job_banner/title.png') }}">

    <style>
        body {
            margin: 0;
            padding: 32px 20px;
            background: #fff;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        main {
            max-width: 900px;
            margin: 0 auto;
        }

        h1 {
            margin: 0 0 32px;
            font-size: 32px;
        }

        section {
            margin-bottom: 28px;
        }

        h2 {
            margin: 0 0 8px;
            font-size: 20px;
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <main>
        <h1>PRO 1 Membership Policy</h1>

        @foreach (trans('app_policy.sections', [], 'en') as $section)
            <section>
                <h2>{{ $section['title'] }}</h2>
                <p>{{ $section['text'] }}</p>
            </section>
        @endforeach
    </main>
</body>
</html>
