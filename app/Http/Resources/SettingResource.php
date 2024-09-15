<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'weekend1' => $this->weekend1,
            'weekend2' => $this->weekend2,
            'bonusHours' => $this->bonusHours,
            'deductionsHours' => $this->deductionsHours,
        ];
    }
}
