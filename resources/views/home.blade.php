@extends('layouts.base')

@section('name', 'siva')

@section('content')
    <h1 class="text-4xl fond-bold">Home</h1>
    <p>CSS for the sake of simplicity and included the tailwind CDN link here. However, you don't need to know Tailwind CSS to understand the concept in this video. To begin with, we have the entire mockup within the home.play. PHP, but if we need to add another view like an about page with a similar nav bar and content section repeating this entire code is not a good idea. So let's create a layouts folder within views and create a file based.blade.PHP, which will serve as our base layout. Copy the entire a code from the home view, paste it into the blade file. The content that would change in other pages is this part, so cut it out from here, and paste it into the home view replacing all of this code. We need to define this as a section, using the section directive in blade. And this would be the name of the section, so let's call it content. And this end section will be at the end of the section. This blade directives was auto completed because I am using some extensions in vs code like this Laravel Blade Snippets and Laravel Blade Spacer to add spaces automatically when I type double curly braces. I recommend installing both of these extensions. Now back to our code, so we have added this within the section content. We also need to specify which layout this file is inheriting, and that can be done</p>
@endsection
