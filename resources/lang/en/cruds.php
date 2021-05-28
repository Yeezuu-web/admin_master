<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'file' => [
        'title'             => 'Files',
        'title_signular'    => 'File',
        'fields'            => [
            'id'                       => 'ID',
            'content_id'               => 'File ID',
            'content_id_helper'        => ' ',
            'title_of_content'         => 'Title of content',
            'title_of_content_helper'  => ' ',
            'type_of_content'          => 'Type of content',
            'type_of_content_helper'   => ' ',
            'type_of_file'             => 'Type of file',
            'type_of_file_helper'      => ' ',
            'episode'                  => 'Episode',
            'episode_helper'           => ' ',
            'duration'                 => 'Duration',
            'duration_helper'          => ' ',
            'file_extension'           => 'File Extension',
            'file_extension_helper'    => ' ',
            'resolution'               => 'Resolution',
            'resolution_helper'        => ' ',
            'me'                      => 'M/E',
            'me_helper'               => ' ',
            'khmer_dub'                => 'Khmer Dub',
            'khmer_dub_helper'         => ' ',
            'path'                     => 'Path',
            'path_helper'              => ' ',
            'storage'                  => 'Storage',
            'storage_helper'           => ' ',
            'date_received'            => 'Date Received',
            'date_received_helper'     => ' ',
            'year'                     => 'Year',
            'year_helper'              => ' ',
            'poster'                   => 'Poster',
            'poster_helper'            => ' ',
            'trailer_promo'            => 'Trailer and Promo',
            'trailer_promo_helper'     => ' ',
            'synopsis'                 => 'Synopsis',
            'synopsis_helper'          => ' ',
            'file_size'                => 'File Size',
            'file_size_helper'         => ' ',
            'start_date'               => 'Start Date',
            'start_date_helper'        => ' ',
            'end_date'                 => 'End Date',
            'end_date_helper'          => ' ',
            'period_of_time'           => 'Period of time',
            'period_of_time_helper'    => ' ',
            'remark'                   => 'Remark',
            'remark_helper'            => ' ',
            'created_at'               => 'Create On',
            'updated_at'               => 'Update On',
            'deleted_at'               => 'Delete On',
        ],
    ],
    'schedule'              => [
        'title'             => 'Schedules',
        'title_singular'    => 'Schedule',
        'fields'            => [
            'id'            => 'ID',
            'note'          => 'Note',
            'order'         => 'Order',
            'day_id'        => 'Day',
            'date'          => 'Date',
            'file_id'       => 'Files'
        ],
    ],
];