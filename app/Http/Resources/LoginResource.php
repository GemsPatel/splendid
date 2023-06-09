<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'message' => $this['message'],
            'token_type' => 'bearer',
            'access_token' => $this['access_token'],
            'user_detail' => new AccountResource(auth()->guard('customer-api')->user()),
        ];
        // return parent::toArray($request);
    }
}
