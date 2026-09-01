@php($sections = __('app_policy.sections'))

@foreach ($sections as $section)
    <h3>{{ $section['title'] }}</h3>
    <p>{{ $section['text'] }}</p>
@endforeach
