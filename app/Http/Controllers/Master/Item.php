<?php

namespace App\Http\Controllers\Master;

use App\DataTables\ItemDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Master\Item\BulkDelete;
use App\Http\Requests\Master\Item\Delete;
use App\Http\Requests\Master\Item\Index;
use App\Http\Requests\Master\Item\Store;
use App\Http\Requests\Master\Item\Update;
use App\Repositories\Item as ItemRepository;
use App\Traits\HasCrudActions;
use Yajra\DataTables\Html\Builder;

class Item extends Controller
{
    use HasCrudActions;

    protected $viewPath = 'app.master.items';

    protected $permission = 'item';

    protected $indexRequest = Index::class;

    protected $storeRequest = Store::class;

    protected $updateRequest = Update::class;

    protected $bulkDestroyRequest = BulkDelete::class;

    protected $redirect = '/master/item';

    protected $repositoryClass = ItemRepository::class;
}
