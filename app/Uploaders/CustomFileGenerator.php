<?php

namespace App\Uploaders;

use Illuminate\Support\Str;

class CustomFileNameGenerator
{
    public function generate($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        return Str::slug($originalName) . '.' . $extension;
    }
}
