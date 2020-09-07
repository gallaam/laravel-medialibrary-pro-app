<?php

namespace App\Http\Requests\Livewire;

use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;
use Illuminate\Foundation\Http\FormRequest;

class StoreLivewireAttachmentsRequest extends FormRequest
{
    use ValidatesMedia;

    public function rules()
    {
        return [
            'name' => 'required',
            'media' => ['required', $this->validateMultipleMedia()
                ->minItems(2)
                ->maxItems(3)
                ->maxTotalSizeInKb(2048)
            ]
        ];
    }
}
