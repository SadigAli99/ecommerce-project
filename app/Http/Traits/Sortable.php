<?php

namespace App\Http\Traits;

use App\Services\Admin\MainService;

trait Sortable
{

    public function sort_elements($service, array $sorted_ids): array
    {
        try {
            foreach ($sorted_ids as $key => $sorted_id) {
                $model = $service->getById($sorted_id);
                if (!is_null($model)) {
                    $service->update($model, ['sort' => $key + 1]);
                }
            }

            return [
                'status' => 'success',
                'message' => 'Successfully sorted',
            ];
        } catch (\Exception $ex) {
            return [
                'status' => 'error',
                'message' => $ex->getMessage(),
            ];
        }
    }
}
