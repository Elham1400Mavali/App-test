<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Answer;
use App\Models\ImageSelectionDataset;
use App\Models\ResponseElham;
use App\Models\Step1;
use App\Models\Step2;

use App\Models\SurveyAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class   SurveyController extends Controller
{


    public function showForm(Request  $request,$step){


        $json = File::get(storage_path('app/public/questions.json'));
        $formSteps = json_decode($json, true);

        $questionPerStep = collect($formSteps['steps'])->filter(fn($i) => $i['step'] == $step)->first();
        $formData = session()->get('form_data', []);

        return view('forms.step'.$step,compact('step','questionPerStep'));

    }




    public function submitForm(Request $request,$step)
    {
        $formData = session()->get('form_data', []);
        $this->validateStep($request, $step);

        // اضافه کردن داده‌های مرحله فعلی به سشن
        $formData['step_' . $step] = $request->except('_token');
        session()->put('form_data', $formData);
        if ($step < 11) {
            $nextStep = $step ;
            return redirect()->route('survey.form', ['step' => $nextStep]);
        } else {
            // ذخیره داده‌ها در دیتابیس
            $mergedData = [];
            foreach ($formData as $stepKey => $data) {
                $mergedData = array_merge($mergedData, $data);
            }

          $answer =     Answer::create([
                'education' => $mergedData['education'] ?? null,
                'old' => $mergedData['old'] ?? null,
                'gender' => $mergedData['gender'] ?? null,
                'marital_status' => $mergedData['marital_status'] ?? null,
                'income' => $mergedData['income'] ?? null,
                'job' => $mergedData['job'] ?? null,
                'number_phone' => $mergedData['number_phone'] ?? null,

                'neo1' => $formData['step_2']['selected_option0'] ?? null,
                'neo2' => $formData['step_2']['selected_option1'] ?? null,
                'neo3' => $formData['step_2']['selected_option2'] ?? null,
                'neo4' => $formData['step_2']['selected_option3'] ?? null,
                'neo5' => $formData['step_2']['selected_option4'] ?? null,
                'neo6' => $formData['step_2']['selected_option5'] ?? null,

                'neo7' => $formData['step_3']['selected_option0'] ?? null,
                'neo8' => $formData['step_3']['selected_option1'] ?? null,
                'neo9' => $formData['step_3']['selected_option2'] ?? null,
                'neo10' => $formData['step_3']['selected_option3'] ?? null,
                'neo11' => $formData['step_3']['selected_option4'] ?? null,
                'neo12' => $formData['step_3']['selected_option5'] ?? null,

                'neo13' => $formData['step_4']['selected_option0'] ?? null,
                'neo14' => $formData['step_4']['selected_option1'] ?? null,
                'neo15' => $formData['step_4']['selected_option2'] ?? null,
                'neo16' => $formData['step_4']['selected_option3'] ?? null,
                'neo17' => $formData['step_4']['selected_option4'] ?? null,
                'neo18' => $formData['step_4']['selected_option5'] ?? null,

                'neo19' => $formData['step_5']['selected_option0'] ?? null,
                'neo20' => $formData['step_5']['selected_option1'] ?? null,
                'neo21' => $formData['step_5']['selected_option2'] ?? null,
                'neo22' => $formData['step_5']['selected_option3'] ?? null,
                'neo23' => $formData['step_5']['selected_option4'] ?? null,
                'neo24' => $formData['step_5']['selected_option5'] ?? null,

                'neo25' => $formData['step_6']['selected_option0'] ?? null,
                'neo26' => $formData['step_6']['selected_option1'] ?? null,
                'neo27' => $formData['step_6']['selected_option2'] ?? null,
                'neo28' => $formData['step_6']['selected_option3'] ?? null,
                'neo29' => $formData['step_6']['selected_option4'] ?? null,
                'neo30' => $formData['step_6']['selected_option5'] ?? null,

                'neo31' => $formData['step_7']['selected_option0'] ?? null,
                'neo32' => $formData['step_7']['selected_option1'] ?? null,
                'neo33' => $formData['step_7']['selected_option2'] ?? null,
                'neo34' => $formData['step_7']['selected_option3'] ?? null,
                'neo35' => $formData['step_7']['selected_option4'] ?? null,
                'neo36' => $formData['step_7']['selected_option5'] ?? null,

                'neo37' => $formData['step_8']['selected_option0'] ?? null,
                'neo38' => $formData['step_8']['selected_option1'] ?? null,
                'neo39' => $formData['step_8']['selected_option2'] ?? null,
                'neo40' => $formData['step_8']['selected_option3'] ?? null,
                'neo41' => $formData['step_8']['selected_option4'] ?? null,
                'neo42' => $formData['step_8']['selected_option5'] ?? null,

                'neo43' => $formData['step_9']['selected_option0'] ?? null,
                'neo44' => $formData['step_9']['selected_option1'] ?? null,
                'neo45' => $formData['step_9']['selected_option2'] ?? null,
                'neo46' => $formData['step_9']['selected_option3'] ?? null,
                'neo47' => $formData['step_9']['selected_option4'] ?? null,
                'neo48' => $formData['step_9']['selected_option5'] ?? null,

                'neo49' => $formData['step_10']['selected_option0'] ?? null,
                'neo50' => $formData['step_10']['selected_option1'] ?? null,
                'neo51' => $formData['step_10']['selected_option2'] ?? null,
                'neo52' => $formData['step_10']['selected_option3'] ?? null,
                'neo53' => $formData['step_10']['selected_option4'] ?? null,
                'neo54' => $formData['step_10']['selected_option5'] ?? null,

                'neo55' => $formData['step_11']['selected_option0'] ?? null,
                'neo56' => $formData['step_11']['selected_option1'] ?? null,
                'neo57' => $formData['step_11']['selected_option2'] ?? null,
                'neo58' => $formData['step_11']['selected_option3'] ?? null,
                'neo59' => $formData['step_11']['selected_option4'] ?? null,
                'neo60' => $formData['step_11']['selected_option5'] ?? null,
                 ]);



            session()->forget('form_data');
			session(['answer_id'=> $answer->id ]);


        return Redirect::route('random.step', $step=1);

        }
    }

    private function validateStep(Request $request, $step)
    {
        $rules = [];
        switch ($step) {
            case 1:
                $rules = [
                    'education' => 'required|in:associate_below,masters,associate_above',
                    'old' => 'required|in:below_20,between_20-30,between_31-40,above_40',
                    'gender' => 'required|in:woman,man',
                    'marital_status' => 'required|in:married,single',
                    'income' => 'required|in:below_10m,between_10_20,above_20',
                    'job' => 'required|string',
                    'number_phone' => 'required|regex:/^09[0-9]{9}$/',
                ];
                break;
            case 10:
            case 9:
            case 8:
            case 7:
            case 6:
            case 5:
            case 4:
            case 3:
            case 2:
                $rules = [
                    'selected_option0' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option1' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option2' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option3' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option4' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                    'selected_option5' => 'required|in:completely_disagree,disagree,neutral,agree,completely_agree',
                ];
                break;
        }

        $request->validate($rules);
    }


}
