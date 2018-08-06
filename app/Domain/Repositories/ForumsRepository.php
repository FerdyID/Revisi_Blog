<?php

namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Entities\Forums;


/**
 * Class BukuRepository
 * @package App\Domain\Repositories
 */
class ForumsRepository extends AbstractRepository implements Crudable
{

    /**
     * @var Buku
     */
    protected $model;

    /**
     * BukuRepository constructor.
     * @param Buku $forums
     */
    public function __construct(Forums $forums)
    {
        $this->model = $forums;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        $akun = $this->model
            ->select('forums.*')
            ->paginate($limit)
            ->toArray();
        return $akun;
    }
    public function createdata(array $data)
    {
        try {
            $simpan = parent::create([
                'title' => e($data['title']),
                'description' => e($data['description']),
               
            ]);
            return $simpan;
        } catch (\Exception $e) {
            // store errors to log
            \Log::error('class : ' . ForumsRepository::class . ' method : create | ' . $e);

            return $e;
        }

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'title' => e($data['title']),
            'description' => e($data['description']),

        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function kunci($id)
    {
        // has section and key
        $id2 =substr($id, 0, 36);
        $status =substr($id, 36, 1);
        $TransaksiProperti = parent::update($id2, [
                'is_lock' => $status,

            ]
        );
        return $TransaksiProperti;
    }

    public function batasinputadministrator()
    {
        if (session('level') == 1) {
            $jk = $this->model
                ->join('users', 'jihd.user_id', '=', 'users.id')
                ->where('users.level', session('level'))
                ->where('users.id', session('user_id'))
                ->count();
        } else {
            $jk = 0;
        }
        if (null == $jk) {
            return 0;
        }
        return $jk;

    }

}