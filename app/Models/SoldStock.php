<?Php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldStock extends Model
{
    use HasFactory;

    protected $table = 'sold_stocks';

    protected $fillable = [
        'saleDate',
        'products',
        'total_amount', // Add total_amount to fillable fields
    ];
}
