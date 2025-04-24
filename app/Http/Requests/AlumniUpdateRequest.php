<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {

    } 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];
        
        $rules['role']            = ['nullable', 'in:U,A'];
        $rules['username']        = ['nullable', 'string', 'max:128'];
        $rules['password']        = ['nullable', 'string', 'min:8', 'max:128'];
        $rules['retype_password'] = ['nullable', 'string', 'min:8', 'max:128'];
        $rules['name']            = ['nullable', 'string', 'max:255'];
        $rules['id_number']       = ['nullable', 'string', 'max:128'];
        $rules['gender']          = ['nullable', 'in:1,2'];
        $rules['email']           = ['nullable', 'string', 'max:128', 'email'];
        $rules['nationality']     = ['nullable'];
        $rules['phone']           = ['nullable', 'string', 'max:128']; 
        $rules['qualification']   = ['nullable', 'string', 'max:128'];
        $rules['course']          = ['nullable', 'string', 'max:128'];
        $rules['graduation_year'] = ['nullable' ];
        $rules['address1']        = ['nullable', 'string', 'max:255'];
        $rules['address2']        = ['nullable', 'string', 'max:255'];
        $rules['city']            = ['nullable', 'string', 'max:128'];
        $rules['postcode']        = ['nullable', 'string', 'max:128'];
        $rules['country']         = ['nullable' ];
        $rules['region']          = ['nullable', 'string', 'max:128'];
        $rules['position']        = ['nullable', 'string', 'max:255'];
        $rules['company_name']    = ['nullable', 'string', 'max:255'];
        $rules['company_address1'] = ['nullable', 'string', 'max:255'];
        $rules['company_address2'] = ['nullable', 'string', 'max:255'];
        $rules['company_city']     = ['nullable', 'string', 'max:128'];
        $rules['company_postcode'] = ['nullable', 'string', 'max:128'];
        $rules['company_country']  = ['nullable'];
        $rules['company_region']   = ['nullable', 'string', 'max:128'];

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        $messages = [];
        
        $messages['role.nullable']          = __("The 【:name】 is required", ["name" => __("Role")]);
        $messages['role.in']                = __("The selected 【:name】 is invalid", ["name" => __("Role")]);

        $messages['username.nullable']      = __("The 【:name】 is required", ["name" => __("Username")]);
        $messages['username.max']           = __("【:name】 cannot exceed :no characters", ["name" => __("Username"), "no" => 128]);
        
    
        $messages['password.nullable']      = __("The 【:name】 is required", ["name" => __("Password")]);
        $messages['password.min']           =  __("【:name】 must have at least :no characters", ["name" => __("Password"), "no" => 8]);
        $messages['password.max']           = __("【:name】 cannot exceed :no characters", ["name" => __("Password"), "no" => 128]);

        $messages['retype_password.nullable']      = __("The 【:name】 is required", ["name" => __("Password")]);
        $messages['retype_password.min']           =  __("【:name】 must have at least :no characters", ["name" => __("Password"), "no" => 8]);
        $messages['retype_password.max']           = __("【:name】 cannot exceed :no characters", ["name" => __("Password"), "no" => 128]);
   
        $messages['name.nullable']      = __("The 【:name】 is required", ["name" => __("Full Name")]);
        $messages['name.max']           = __("【:name】 cannot exceed :no characters", ["name" => __("Username"), "no" => 255]);

        $messages['id_number.nullable']      = __("The 【:name】 is required", ["name" => __("ID Number")]);

        $messages['gender.nullable']          = __("The 【:name】 is required", ["name" => __("Gender")]);
        $messages['gender.in']                = __("The selected 【:name】 is invalid", ["name" => __("Gender")]);
        
        $messages['email.nullable']      = __("The 【:name】 is required", ["name" => __("Email")]);
        $messages['email.email']         = __("The 【:name】 format is invalid", ["name" => __("Email")]);
       
        $messages['nationality.nullable']      = __("The 【:name】 is required", ["name" => __("Nationality")]);

        $messages['phone.nullable']      = __("The 【:name】 is required", ["name" => __("Phone")]);
        $messages['phone.max']           = __("【:name】 cannot exceed :no characters", ["name" => __("Phone"), "no" => 128]);

        $messages['qualification.nullable']     = __("The 【:name】 is required", ["name" => __("Qualification")]);
        $messages['qualification.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Qualification"), "no" => 128]);

        $messages['course.nullable']     = __("The 【:name】 is required", ["name" => __("Course")]);
        $messages['course.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Course"), "no" => 128]);

        $messages['graduation_year.nullable']     = __("The 【:name】 is required", ["name" => __("Graduation Year")]);
       

        $messages['address1.nullable']     =  __("The 【:name】 is required", ["name" => __("Address Line 1")]);
        $messages['address1.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Address Line 1"), "no" => 255]);


        $messages['city.nullable']     =  __("The 【:name】 is required", ["name" => __("City")]);
        $messages['city.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("City"), "no" => 128]);

        $messages['postcode.nullable']     =  __("The 【:name】 is required", ["name" => __("Postcode")]);
        $messages['postcode.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Postcode"), "no" => 128]);

        $messages['country.nullable']     =  __("The 【:name】 is required", ["name" => __("Country")]);

        $messages['position.nullable']     =  __("The 【:name】 is required", ["name" => __("Position")]);
        $messages['position.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Position"), "no" => 255]);

        $messages['company_name.nullable']     =  __("The 【:name】 is required", ["name" => __("Company Name")]);
        $messages['company_name.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Company Name"), "no" => 255]);

        $messages['company_address1.nullable']     =  __("The 【:name】 is required", ["name" => __("Company Address Line 1")]);
        $messages['company_address1.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Company Address Line 1"), "no" => 255]);

        $messages['company_city.nullable']     =  __("The 【:name】 is required", ["name" => __("Company City")]);
        $messages['company_city.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Company City"), "no" => 128]);

        $messages['company_postcode.nullable']     =  __("The 【:name】 is required", ["name" => __("Company Postcode")]);
        $messages['company_postcode.max']          = __("【:name】 cannot exceed :no characters", ["name" => __("Company Postcode"), "no" => 128]);
    
        $messages['company_country.nullable']     =  __("The 【:name】 is required", ["name" => __("Company Country")]);
        $messages['company_country.max']          = __("The 【:name】 must be exactly 3 characters (ISO code)", ["name" => __("Company Country")]);

        return $messages;
    }
    
}
