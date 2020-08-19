<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AccountInfo;
use App\Models\AudioInfo;
use App\Models\VideoInfo;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{

    /**
     * $SUCCESS_STATUS
     *
     * @var integer
     * all fine (ok)
     */
    public $SUCCESS_STATUS = 200;

    /**
     * $VALIDATION_ERROR
     *
     * @var integer
     * some error in validation (bad request)
     */
    public $VALIDATION_ERROR = 400;

    /**
     * $FAILURE_STATUS
     *
     * @var integer
     * faliure status (not modified)
     */
    public $FAILURE_STATUS = 304;

    /**
     * $DATA_NOT_FOUND
     *
     * @var integer
     * if all set but no data found (no content)
     */
    public $DATA_NOT_FOUND = 204;

    /**
     * createProfile
     *
     * @return success status
     */
    public function createProfile(Request $request)
    {
        /**
         * validate request data
         */
        $validator = Validator::make($request->all(),
            [
                'account_name' => 'required',
                'account_mail' => 'required',
                'account_gender' => 'required',
                'account_birthday' => 'required',
                'account_country' => 'required',

            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->VALIDATION_ERROR);
        } else {
            try
            {

                /**
                 * check if user already exist
                 */
                $isexist = AccountInfo::where('account_mail', $request->account_mail)->first();
                if (!$isexist) {

                    $account = new AccountInfo();
                    $account->account_name = $request->account_name;
                    $account->account_mail = $request->account_mail;
                    $account->account_gender = $request->account_gender;
                    $account->account_birthday = $request->account_birthday;
                    $account->account_country = $request->account_country;
                    $account->created_at = Carbon::now();
                    $account->updated_at = Carbon::now();

                    if ($account->save()) {
                        return response()->json(['message' => 'successfully added'], $this->SUCCESS_STATUS);
                    } else {
                        return response()->json(['message' => 'account not created'], $this->FAILURE_STATUS);
                    }

                } else {
                    return response()->json(['message' => 'account already exists'], $this->FAILURE_STATUS);
                }
            } catch (\Illuminate\Database\QueryException $exception) {
                return response()->json(['message' => $exception->getMessage()], $this->FAILURE_STATUS);
            }
        }
    }


    /**
     * uploadVideo
     * @param request
     * @return success status
     */
    public function uploadVideo(Request $request)
    {
        /**
         * validate request data
         */
        $validator = Validator::make($request->all(),
            [
                'account_id' => 'required',
                'account_video' => 'required',

            ]);

        

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->VALIDATION_ERROR);
        } else {

            
                try
                {

                    /**
                     * upload video
                     */
                $account_video = $request->file('account_video');
                if (isset($account_video)) {
                $video_name = $account_video->getClientOriginalName();
                 $video_name = str_replace(" ", "_", $video_name);
                $account_video->move('videos',$video_name);
                }

                    $video = new VideoInfo();
                    $video->account_id = $request->account_id;
                    $video->video_name = 'videos'.'/'.$video_name;
                    $video->created_at = Carbon::now();
                    $video->updated_at = Carbon::now();

                    if ($video->save()) {
                        return response()->json(['message' => 'successfully added'], $this->SUCCESS_STATUS);
                    } else {
                        return response()->json(['message' => 'account not created'], $this->FAILURE_STATUS);
                    }
                } catch (\Illuminate\Database\QueryException $exception) {
                    return response()->json(['message' => $exception->getMessage()], $this->FAILURE_STATUS);
                }

            
        }
    }


    /**
     * getAllVideos
     * 
     * @return success status
     */
    public function getAllVideos()
    {
        try
        {
            $get_video = VideoInfo::all();

            if ($get_video->count() > 0) {
                return response()->json(['get_video' => $get_video], $this->SUCCESS_STATUS);
            } else {
                return response()->json(['message' => 'no data found'],$this->DATA_NOT_FOUND);
            }

        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->FAILURE_STATUS);
        }

    }


    /**
     * getAllAccounts
     * 
     * @return success status
     */

    public function getAllAccounts()
    {
        try
        {
            $get_account = AccountInfo::all();

            if ($get_account->count() > 0) {
                return response()->json(['get_account' => $get_account], $this->SUCCESS_STATUS);
            } else {
                return response()->json(['message' => 'no data found'],$this->DATA_NOT_FOUND);
            }

        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->FAILURE_STATUS);
        }

    }


    /**
     * uploadAudio
     * @param request
     * @return success status
     */
    public function uploadAudio(Request $request)
    {
        /**
         * validate request data
         */
        $validator = Validator::make($request->all(),
            [
                'account_id' => 'required',
                'account_audio' => 'required',

            ]);

        

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->VALIDATION_ERROR);
        } else {

            
                try
                {

                    /**
                     * upload video
                     */
                $account_audio = $request->file('account_audio');
                if (isset($account_audio)) {
                $audio_name = $account_audio->getClientOriginalName();
                 $audio_name = str_replace(" ", "_", $audio_name);
                $account_audio->move('audio',$audio_name);
                }

                    $audio = new AudioInfo();
                    $audio->account_id = $request->account_id;
                    $audio->audio_name = 'audio'.'/'.$audio_name;
                    $audio->created_at = Carbon::now();
                    $audio->updated_at = Carbon::now();

                    if ($audio->save()) {
                        return response()->json(['message' => 'successfully added'], $this->SUCCESS_STATUS);
                    } else {
                        return response()->json(['message' => 'video not added'], $this->FAILURE_STATUS);
                    }
                } catch (\Illuminate\Database\QueryException $exception) {
                    return response()->json(['message' => $exception->getMessage()], $this->FAILURE_STATUS);
                }

            
        }
    }

}
