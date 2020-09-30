@extends('layouts.master')

@section('content')

    <x-h2>Livewire: collection with custom property</x-h2>

    <form method="POST">
        <x-grid>
            @csrf

            <x-field label="name">
                <x-input id="name" name="name" placeholder="Name" value="{{ old('name', $formSubmission->name) }}"  />
            </x-field>

            <x-field label="Images">
                <x-media-library-collection
                    name="images"
                    :model="$formSubmission"
                    collection="images"
                    max-items="3"
                    rules="mimes:png,jpeg"
                    fields-view="uploads.livewire.partials.custom-properties"
                />
            </x-field>

            <x-button data-testing-role="submit" type="submit">Submit</x-button>
        </x-grid>
    </form>

@endsection
