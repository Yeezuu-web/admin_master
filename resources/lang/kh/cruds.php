<?php

return [
    'userManagement' => [
        'title'          => 'ការគ្រប់គ្រងអ្នកប្រើប្រាស់',
        'title_singular' => 'ការគ្រប់គ្រងអ្នកប្រើប្រាស់',
    ],
    'permission' => [
        'title'          => 'ការអនុញ្ញាត',
        'title_singular' => 'ការអនុញ្ញាត',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'ចំណងជើង',
            'title_helper'      => ' ',
            'created_at'        => 'ពេលបានបង្កើត',
            'created_at_helper' => ' ',
            'updated_at'        => 'ពេលធ្វើបច្ចុប្បន្នភាព',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ពេលលុប',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'តួនាទី',
        'title_singular' => 'តួនាទី',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'ចំណងជើង',
            'title_helper'       => ' ',
            'permissions'        => 'ការអនុញ្ញាត',
            'permissions_helper' => ' ',
            'created_at'         => 'ពេលបានបង្កើត',
            'created_at_helper'  => ' ',
            'updated_at'         => 'ពេលធ្វើបច្ចុប្បន្នភាព',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'ពេលលុប',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'អ្នក​ប្រើ',
        'title_singular' => 'អ្នក​ប្រើ',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'ឈ្មោះ',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'ពេលអ៊ីមែលបានផ្ទៀងផ្ទាត់',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'តួនាទី',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'ពេលបានបង្កើត',
            'created_at_helper'        => ' ',
            'updated_at'               => 'ពេលធ្វើបច្ចុប្បន្នភាព',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'ពេលលុប',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'file' => [
        'title'             => 'ការគ្រប់គ្រងឯកសារ',
        'title_signular'    => 'ឯកសារ',
        'fields'            => [
            'id'                       => 'ID',
            'content_id'               => 'លេខសម្គាល់ឯកសារ',
            'content_id_helper'        => ' ',
            'title_of_content'         => 'ចំណងជើងនៃមាតិកា',
            'title_of_content_helper'  => ' ',
            'type_of_content'          => 'ប្រភេទនៃមាតិកា',
            'type_of_content_helper'   => ' ',
            'type_of_file'             => 'ប្រភេទឯកសារ',
            'type_of_file_helper'      => ' ',
            'episode'                  => 'ភាគ',
            'episode_helper'           => ' ',
            'duration'                 => 'រយៈពេល',
            'duration_helper'          => ' ',
            'file_extension'           => 'ផ្នែកកន្ទុយឯកសារ',
            'file_extension_helper'    => ' ',
            'resolution'               => 'កម្រិតរូបភាព',
            'resolution_helper'        => ' ',
            'me'                      => 'M/E',
            'me_helper'               => ' ',
            'khmer_dub'                => 'Khmer Dubbing',
            'khmer_dub_helper'         => ' ',
            'path'                     => 'ទីតាំងឯកសារ',
            'path_helper'              => ' ',
            'storage'                  => 'Storage',
            'storage_helper'           => ' ',
            'date_received'            => 'កាលបរិច្ឆេទទទួល',
            'date_received_helper'     => ' ',
            'year'                     => 'ឆ្នាំ',
            'year_helper'              => ' ',
            'poster'                   => 'Poster',
            'poster_helper'            => ' ',
            'trailer_promo'            => 'Trailer and Promo',
            'trailer_promo_helper'     => ' ',
            'synopsis'                 => 'Synopsis',
            'synopsis_helper'          => ' ',
            'file_size'                => 'ទំហំឯកសារ',
            'file_size_helper'         => ' ',
            'start_date'               => 'ថ្ងៃ​ចាប់ផ្តើម',
            'start_date_helper'        => ' ',
            'end_date'                 => 'កាលបរិច្ឆេទបញ្ចប់',
            'end_date_helper'          => ' ',
            'period_of_time'           => 'រយៈពេល',
            'period_of_time_helper'    => ' ',
            'remark'                   => 'ការអត្ថាធិប្បាយ',
            'remark_helper'            => ' ',
            'created_at'               => 'ពេលបានបង្កើត',
            'created_at_helper'        => ' ',
            'updated_at'               => 'ពេលធ្វើបច្ចុប្បន្នភាព',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'ពេលលុប',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'schedule'              => [
        'title'             => 'ការគ្រប់គ្រងកាលវិភាគ',
        'title_singular'    => 'កាលវិភាគ',
        'fields'            => [
            'id'            => 'ID',
            'note'          => 'ចំណាំ',
            'order'         => 'តម្រៀបតាម',
            'day_id'        => 'ថ្ងៃ',
            'date'          => 'កាលបរិច្ឆេទ',
            'file_id'       => 'ឯកសារ'
        ],
    ],
    'series'              => [
        'title'             => 'ការគ្រប់គ្រងក្បាលកូដ',
        'title_singular'    => 'ក្បាលកូដ',
        'fields'            => [
            'id'            => 'ID',
            'note'          => 'ចំណាំ',
            'order'         => 'តម្រៀបតាម',
            'day_id'        => 'ថ្ងៃ',
            'date'          => 'កាលបរិច្ឆេទ',
            'file_id'       => 'ឯកសារ'
        ],
    ],
];