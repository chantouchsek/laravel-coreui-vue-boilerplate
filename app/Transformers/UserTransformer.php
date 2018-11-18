<?php

namespace App\Transformers;

class UserTransformer extends BaseTransformer
{

    /**
     * Method used to transform an item.
     *
     * @param $item mixed The item to be transformed.
     *
     * @return array The transformed item.
     */
    public function transform($item): array
    {
        $image = $item->hasThumbnail() ? env('GOOGLE_CLOUD_STORAGE_API_URI') . $item->thumbnail()->filename : asset('images/no-image-available.jpg');
        return [
            'id' => (int)$item->id,
            'name' => (string)$item->name,
            'email' => (string)$item->email,
            'staff_id' => $item->staff_id,
            'registered' => $item->created_at ? $item->created_at->toDateString() : null,
            'branch' => $item->branch,
            'hourly_rate' => $item->hourly_rate,
            'birth_date' => $item->birth_date ? $item->birth_date->toDateString() : null,
            'branch_id' => $item->branch_id,
            'is_admin' => (boolean)$item->is_admin,
            'start_date' => $item->start_date ? $item->start_date->toDateString() : null,
            'address' => $item->address,
            'status' => $item->status,
            'gender' => $item->gender,
            'blood_type' => $item->blood_type,
            'user_type' => $item->user_type,
            'hobbies' => $item->hobbies,
            'pr_comments' => $item->pr_comments,
            'thumbnail_id' => $image,
            'avatar' => $image,
            'phone_number' => $item->phone_number,
            'birth_place' => $item->birth_place,
            'user_id' => $item->user_id,
            'is_supper_admin' => (boolean)$item->is_supper_admin,
            'can_delete' => (boolean)$item->can_delete,
            'can_edit' => (boolean)$item->can_edit,
            'can_see_profile' => (boolean)$item->can_see_profile,
            'staff_rank_id' => (int)$item->staff_rank_id,
            'staffRank' => isset($item->staffRank) ? $item->staffRank : ['color' => '#000'],
            'reports' => [
                'previous' => $item->previous_month_report,
                'current' => $item->current_month_report
            ],
            'evaluations' => $item->evaluations ?? [],
            'evaluation' => $item->evaluation ?? null,
            'dailyReports' => [],
            'attendances' => $item->attendances ?? [],
        ];
    }
}
