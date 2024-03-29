<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MakeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'logoPath' => $this->logo_path,
            'createdAt' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updatedAt' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
