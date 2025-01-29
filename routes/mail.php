use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/sendmessage', [ContactController::class, 'sendMessage'])->name('sendmessage');
