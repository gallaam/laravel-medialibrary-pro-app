@extends('layouts.master', ['pageTitle' => 'Livewire: attachment'])

@section('content')

    {{ $errors }}

    <x-h2>Livewire: attachment</x-h2>

    <form method="POST">
        <x-grid>
            @csrf

            <x-field label="name">
                <x-input id="name" name="name" placeholder="Your first name" />
            </x-field>

            <x-field label="file">
                <x-media-library-attachment name="media" rules="mimes:png,jpeg,pdf" />
            </x-field>

            <x-button data-testing-role="submit">Submit</x-button>
        </x-grid>
    </form>

@endsection
