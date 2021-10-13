<?php
/**
 * Custom Field Map Api
 */
function mbn_acf_google_map_api($api){
	$api['key'] = MBN_MAP_API_KEY;
	
	return $api;
}
add_filter('acf/fields/google_map/api', 'mbn_acf_google_map_api');



add_filter( 'gform_phone_formats', 'usa_phone_format' );
function usa_phone_format( $phone_formats ) {
    $phone_formats['usa'] = array(
        'label'       => 'USA',
        'mask'        => '(999) 999-9999',
        //'mask'        => false,
        'regex'       => '/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i',
        'instruction' => false,
    );
 
    return $phone_formats;
}

add_filter( 'gform_field_validation', 'validate_phone', 10, 4 );

function validate_phone( $result, $value, $form, $field ) {
    
    if ( $field->type == 'phone' && $field->phoneFormat == 'usa' ) {
        if(!valid_US_phone( $value )) {
            $result['is_valid'] = false;
            $result['message']  = 'Please enter a valid US phone number';
        } else {
            $result['is_valid'] = true;            
        }
    }
    return $result;
}

function valid_US_phone($phone){
    $prefix = ['205','251','256','334','907','480','520','602','623','928','479','501','870','209','213','310','323','408','415','424','510','530','559','562','619','626','650','661','707','714','760','805','818','831','858','909','916','925','949','951','303','719','720','970','203','860','302','202','689','239','305','321','352','386','407','561','727','754','772','786','813','850','863','904','941','954','762','229','404','478','678','706','770','912','808','208','730','779','217','224','309','312','447','618','630','708','773','815','847','219','260','317','574','765','812','319','515','563','641','712','316','620','785','913','270','502','606','859','225','318','337','504','985','207','240','301','410','443','339','351','413','508','617','774','781','857','978','231','248','269','313','517','586','616','734','810','906','947','989','218','320','507','612','651','763','952','228','601','662','769','314','417','573','636','660','816','406','308','402','702','775','603','201','551','609','732','848','856','862','908','973','505','575','212','315','347','516','518','585','607','631','646','716','718','845','914','917','252','336','704','828','910','919','980','701','216','234','330','419','440','513','567','614','740','937','405','580','918','503','541','971','215','267','412','484','570','610','717','724','814','878','401','803','843','864','605','423','615','731','865','901','931','210','214','254','281','325','361','409','430','432','469','512','682','713','806','817','830','832','903','915','936','940','956','972','979','435','801','802','276','434','540','571','703','757','804','206','253','360','425','509','681','304','262','414','608','715','920','307'];

    $valid =  false;
    $phone =  trim($phone);
    foreach ($prefix as $key => $pre) {
        if (strpos($phone, "({$pre}) ") === 0) {
            $item = explode("({$pre}) ", $phone);
            if(count($item) == 2){
                $num = explode("-", $item[1]);
                if(count($num) == 2){
                    if( ( strlen($num[0]) == 3 ) && ( strlen($num[1]) == 4 )) {
                        if(is_numeric( strlen($num[0])) && is_numeric( strlen($num[1])) ) {
                            $valid =  true;
                            break;
                        }
                    }
                }
            } 
        }

    }

    return $valid;

}

function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'services_type' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' .  $post->post_type . '/', '/', $post_link );

    return $post_link;
}
//add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'services_type', 'page' ) );
    }
    
    // if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
    //     return;
    // }

    // if ( ! empty( $query->query['name'] ) ) {

    //     $query->set( 'post_type', array( 'post', 'services_type', 'page' ) );

    // } elseif ( ! empty( $query->query['pagename'] ) && false === strpos( $query->query['pagename'], '/' ) ) {
        
    //     $query->set( 'post_type', array( 'post', 'services_type', 'page' ) );

    //     // We also need to set the name query var since redirect_guess_404_permalink() relies on it.
    //     $query->set( 'name', $query->query['pagename'] );
    // }

}
//add_action( 'pre_get_posts', 'na_parse_request' );

// Code for themes
//add_action( 'after_switch_theme', 'flush_rewrite_rules' );
