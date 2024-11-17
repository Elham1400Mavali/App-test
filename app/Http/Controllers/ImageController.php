<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Answer;
use App\Models\ImageView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{


    public function showRandomStep($step=1,Request $request)
    {
//        $step_image = $request->get('step', 2);

        $json = File::get(storage_path('app/public/questions.json'));
        $formSteps = json_decode($json, true);

        $questionPerStep = collect($formSteps['steps'])->filter(fn($i) => $i['step'] == 12)->first();

        $adsPath = $this->getCategory($step);
        $imagePath = $adsPath['url'];
        $this->setViewForAds($adsPath['image']);


        // code for dataset random
        $json = storage_path('app/public/dataset.json');
	
        $jsonContentDataset = file_get_contents($json);
        $folders = json_decode($jsonContentDataset, true); //folder -> images

        $folderFlat = [];

        foreach ($folders as $folderName => $images) {
            foreach ($images as $image) {
                $folderFlat[] = ["$folderName/$image"];
            }
        }

        $randomImages = collect($folderFlat)
            ->shuffle()
            ->take(30)
            ->flatten()
            ->map(fn($i) => Url("images/$i"))
            ->toArray();

        $imageData = session()->get('image_data', []);

        return view("random.step$step", compact('randomImages', 'imagePath','step','questionPerStep'));

    }

        public function imageStep($step, Request $request)
    {
        $imageData = session()->get('image_data', []);
       $this->validateStep($request, $step);
        $imageData['step_' . $step] = $request->except('_token');
        session()->put('image_data', $imageData);
        if ($step < 5) {
            $nextStep = $step;
            return redirect()->route('random.step', ['step' => $nextStep]);
        } else {


            $data = [];
            foreach ($imageData as $step => $stepData) {
                $questionKey = 'step_' . explode('_', $step)[1];
                $data = array_merge($data, $stepData);

            }
            $answer_id= session('answer_id');
//            dd($answer_id);
            $response=  Advertisement::create([
                'answer_id' => $answer_id,
                'advertise' => $imageData['step_2']['advertise'] ?? null,

                'Ad1Ax1' => $imageData['step_2']['selected_images'][0] ?? null,
                'Ad1Ax2' => $imageData['step_2']['selected_images'][1] ?? null,
                'Ad1Ax3' => $imageData['step_2']['selected_images'][2] ?? null,
                'Ad1Ax4' => $imageData['step_2']['selected_images'][3] ?? null,
                'Ad1Ax5' => $imageData['step_2']['selected_images'][4] ?? null,

                'comment' => $imageData['step_2']['comment'] ?? null,

                'SC1' => $imageData['step_2']['selected_option0'] ?? null,
                'SC2' => $imageData['step_2']['selected_option1'] ?? null,
                'SC3' => $imageData['step_2']['selected_option2'] ?? null,
                'SC4' => $imageData['step_2']['selected_option3'] ?? null,
                'SC5' => $imageData['step_2']['selected_option4'] ?? null,
                'SC6' => $imageData['step_2']['selected_option5'] ?? null,
                'SC7' => $imageData['step_2']['selected_option6'] ?? null,
                'SC8' => $imageData['step_2']['selected_option7'] ?? null,
                'SC9' => $imageData['step_2']['selected_option8'] ?? null,
                'SC10' => $imageData['step_2']['selected_option9'] ?? null,
                'SC11' => $imageData['step_2']['selected_option10'] ?? null,
                'SC12' => $imageData['step_2']['selected_option11'] ?? null,
                'SC13' => $imageData['step_2']['selected_option12'] ?? null,
                'SC14' => $imageData['step_2']['selected_option13'] ?? null,
                'SC15' => $imageData['step_2']['selected_option14'] ?? null,
                'SC16' => $imageData['step_2']['selected_option15'] ?? null,
                'SC17' => $imageData['step_2']['selected_option16'] ?? null,
                'SC18' => $imageData['step_2']['selected_option17'] ?? null,

                'advertise2' => $imageData['step_3']['advertise'] ?? null,
                'Ad2Ax1' => $imageData['step_3']['selected_images'][0] ?? null,
                'Ad2Ax2' => $imageData['step_3']['selected_images'][1] ?? null,
                'Ad2Ax3' => $imageData['step_3']['selected_images'][2] ?? null,
                'Ad2Ax4' => $imageData['step_3']['selected_images'][3] ?? null,
                'Ad2Ax5' => $imageData['step_3']['selected_images'][4] ?? null,

                'comment2' => $imageData['step_3']['comment'] ?? null,
                'SCA1' => $imageData['step_3']['selected_option0'] ?? null,
                'SCA2' => $imageData['step_3']['selected_option1'] ?? null,
                'SCA3' => $imageData['step_3']['selected_option2'] ?? null,
                'SCA4' => $imageData['step_3']['selected_option3'] ?? null,
                'SCA5' => $imageData['step_3']['selected_option4'] ?? null,
                'SCA6' => $imageData['step_3']['selected_option5'] ?? null,
                'SCA7' => $imageData['step_3']['selected_option6'] ?? null,
                'SCA8' => $imageData['step_3']['selected_option7'] ?? null,
                'SCA9' => $imageData['step_3']['selected_option8'] ?? null,
                'SCA10' => $imageData['step_3']['selected_option9'] ?? null,
                'SCA11' => $imageData['step_3']['selected_option10'] ?? null,
                'SCA12' => $imageData['step_3']['selected_option11'] ?? null,
                'SCA13' => $imageData['step_3']['selected_option12'] ?? null,
                'SCA14' => $imageData['step_3']['selected_option13'] ?? null,
                'SCA15' => $imageData['step_3']['selected_option14'] ?? null,
                'SCA16' => $imageData['step_3']['selected_option15'] ?? null,
                'SCA17' => $imageData['step_3']['selected_option16'] ?? null,
                'SCA18' => $imageData['step_3']['selected_option17'] ?? null,

                'advertise3' => $imageData['step_4']['advertise'] ?? null,
                'Ad3Ax1' => $imageData['step_4']['selected_images'][0] ?? null,
                'Ad3Ax2' => $imageData['step_4']['selected_images'][1] ?? null,
                'Ad3Ax3' => $imageData['step_4']['selected_images'][2] ?? null,
                'Ad3Ax4' => $imageData['step_4']['selected_images'][3] ?? null,
                'Ad3Ax5' => $imageData['step_4']['selected_images'][4] ?? null,

                'comment3' => $imageData['step_4']['comment'] ?? null,
                'SCA3_1' => $imageData['step_4']['selected_option0'] ?? null,
                'SCA3_2' => $imageData['step_4']['selected_option1'] ?? null,
                'SCA3_3' => $imageData['step_4']['selected_option2'] ?? null,
                'SCA3_4' => $imageData['step_4']['selected_option3'] ?? null,
                'SCA3_5' => $imageData['step_4']['selected_option4'] ?? null,
                'SCA3_6' => $imageData['step_4']['selected_option5'] ?? null,
                'SCA3_7' => $imageData['step_4']['selected_option6'] ?? null,
                'SCA3_8' => $imageData['step_4']['selected_option7'] ?? null,
                'SCA3_9' => $imageData['step_4']['selected_option8'] ?? null,
                'SCA3_10' => $imageData['step_4']['selected_option9'] ?? null,
                'SCA3_11' => $imageData['step_4']['selected_option10'] ?? null,
                'SCA3_12' => $imageData['step_4']['selected_option11'] ?? null,
                'SCA3_13' => $imageData['step_4']['selected_option12'] ?? null,
                'SCA3_14' => $imageData['step_4']['selected_option13'] ?? null,
                'SCA3_15' => $imageData['step_4']['selected_option14'] ?? null,
                'SCA3_16' => $imageData['step_4']['selected_option15'] ?? null,
                'SCA3_17' => $imageData['step_4']['selected_option16'] ?? null,
                'SCA3_18' => $imageData['step_4']['selected_option17'] ?? null,

                'advertise4' => $imageData['step_5']['advertise'] ?? null,
                'Ad4Ax1' => $imageData['step_5']['selected_images'][0] ?? null,
                'Ad4Ax2' => $imageData['step_5']['selected_images'][1] ?? null,
                'Ad4Ax3' => $imageData['step_5']['selected_images'][2] ?? null,
                'Ad4Ax4' => $imageData['step_5']['selected_images'][3] ?? null,
                'Ad4Ax5' => $imageData['step_5']['selected_images'][4] ?? null,

                'comment4' => $imageData['step_5']['comment'] ?? null,
                'SCA4_1' => $imageData['step_5']['selected_option0'] ?? null,
                'SCA4_2' => $imageData['step_5']['selected_option1'] ?? null,
                'SCA4_3' => $imageData['step_5']['selected_option2'] ?? null,
                'SCA4_4' => $imageData['step_5']['selected_option3'] ?? null,
                'SCA4_5' => $imageData['step_5']['selected_option4'] ?? null,
                'SCA4_6' => $imageData['step_5']['selected_option5'] ?? null,
                'SCA4_7' => $imageData['step_5']['selected_option6'] ?? null,
                'SCA4_8' => $imageData['step_5']['selected_option7'] ?? null,
                'SCA4_9' => $imageData['step_5']['selected_option8'] ?? null,
                'SCA4_10' => $imageData['step_5']['selected_option9'] ?? null,
                'SCA4_11' => $imageData['step_5']['selected_option10'] ?? null,
                'SCA4_12' => $imageData['step_5']['selected_option11'] ?? null,
                'SCA4_13' => $imageData['step_5']['selected_option12'] ?? null,
                'SCA4_14' => $imageData['step_5']['selected_option13'] ?? null,
                'SCA4_15' => $imageData['step_5']['selected_option14'] ?? null,
                'SCA4_16' => $imageData['step_5']['selected_option15'] ?? null,
                'SCA4_17' => $imageData['step_5']['selected_option16'] ?? null,
                'SCA4_18' => $imageData['step_5']['selected_option17'] ?? null,

            ]);
            session()->forget(['image_data','answer_id']);

            return redirect()->route('random.complete')->with('success', 'مرسی که وقت گذاشتی !!!');

        }


    }


      private function validateStep(Request $request, $step)
    {
        $rules = [];
        switch ($step) {
            case 4:
            case 3:
            case 2:
            case 1:
                $rules = [
                    'selected_images' => 'required|array|min:5',
                    'images.*' => 'required|image|mimes:jpeg,png,jpg', // اعتبارسنجی هر تصویر
                    'comment' => 'required|string',
                    'selected_option0' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option1' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option2' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option3' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option4' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option6' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option7' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option8' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option9' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option10' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option11' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option12' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option13' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option14' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option15' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option16' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option17' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                ];
                break;

        }

        $request->validate($rules);
    }


    public function getCategory($step = 1)
    {
        $json = storage_path('app/public/advertisement2.json');
        $jsonContentDataset = file_get_contents($json);
        $folders = json_decode($jsonContentDataset, true); //folder -> images


        $folderFlat = [];

        foreach ($folders as  $images) {
            foreach ($images as $image) {
                $folderFlat[] = [
                    "category" => 'category',
                    "image" => $image,
                ];
            }
        }


        return collect($folderFlat)
            ->filter(fn($i) => ImageView::where('image_name', $i['image'])->pluck('views')->count() <= 3)
            ->shuffle()
            ->take(1)
            ->map(function ($i) {
                return [
                    "url" => Url("images/" . "category" . '/' . $i['image']),
                    "image" => $i['image']
                ];
            })
            ->first();
    }
    public function getQuestion($step = 12)
    {
        $json = File::get(storage_path('app/public/questions.json'));
        $formSteps = json_decode($json, true);

        $questionPerStep = collect($formSteps['steps'])->filter(fn($i) => $i['step'] == $step)->first();

        $questionPerStep['questions'];

        $folderFlat = [];

        foreach ($questionPerStep['questions'] as $folderName => $question) {

            $folderFlat[] = [
                    "question" => $question,
                ];

        }
    }
 

    public function setViewForAds($adsPath): void
    {
         // یافتن تبلیغ بر اساس نام تصویر
        $adView = ImageView::where('image_name', $adsPath)->first();
        if (!$adView) {
            // یافتن رکورد شمارش نمایش یا ایجاد آن
            $adView = ImageView::create([
                'image_name' => $adsPath,
                'ip_address' => request()->ip(),
                'views' => 0
                ]);

        }
        $adView->increment('views');
    }
	  public function complete()
    {
        return view('forms.complete')->with('success', 'مرسی که وقت گذاشتی !!.');
    }

}












