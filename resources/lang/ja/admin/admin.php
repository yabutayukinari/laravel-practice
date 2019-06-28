<?php
/**
 * @copyright Copyright (C) Logical-Studio Co.,Ltd.
 * @since     2017/06/01
 */

// フォーム要素（inputやbutton）のラベル
return [
    // 管理共通
    'common' => [
        'pagination_current' => '全:total件中 :first～:last件表示',
        'select_empty' => '選択してください',
        'select_search_count' => ':limit件まで検索できます',
        'count' => '件',
        'line' => ':line 行目',
        'button' => [
            'search' => '検索',
            'clear' => 'クリア',
            'modify' => '変更',
            'create_confirm' => '登録確認',
            'create_complete' => '登録',
            'edit_confirm' => '編集確認',
            'edit_complete' => '編集完了',
            'send_complete' => '送信完了',
            'delete_confirm' => '削除確認',
            'delete_complete' => '削除完了',
            'back' => '戻る',
            'show' => '詳細',
            'show_back' => '詳細へ戻る',
            'input_back' => '入力へ戻る',
            'search_back' => '検索へ戻る',
            'create' => '新規登録',
            'edit' => '編集',
            'delete' => '削除',
            'update' => '更新',
            'confirm' => '確認',
            'close' => '閉じる',
            'result_csv' => '検索結果CSVダウンロード',
            'result_xls' => '検索結果Excelダウンロード',
            'download_template_csv' => 'CSVテンプレートをダウンロード',
            'send_confirm' => '送信確認',
            'decide' => '決定',
            'import' => '取込',
            'import_csv_back' => 'CSV取込へ戻る',
            'preview' => 'プレビュー',
            'front_view' => 'フロントを表示',
        ],
        'label' => [
            'search' => [
                'conditions' => '検索条件',
            ],
            'esq' => '様',
            'result' => [
                'error' => 'エラー',
                'success' => '成功',
            ],
            'required' => '【必須】'
        ],
        'attributes' => [
            'order' => '並び順',
            'direction' => '昇順/降順',
            'limit' => '表示件数',
        ],
        'like_share' => [
            'like' => 'いいね',
            'twitter_share' => 'シェア Twitter',
            'facebook_share' => 'シェア FaceBook'
        ],
        'comments' => [
            'comment' => 'コメント',
            'image' => '画像',
            'member_name' => '投稿者',
            'created_at' => '投稿日時',
            'admin_check_flg' => '管理者確認',
            'publish_flg' => '公開状態',
            'violation_reports_flg' => '違反報告',
            'delete_flg' => '削除'
        ],
        // CSSクラス名
        'css_class' => [
            'error' => 'danger'
        ],

    ],
    // 認証
    'auth' => [
        'attributes' => [
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'remember' => 'ログイン状態を保存する',
        ]
    ],
    // 管理者
    'user' => [
        'attributes' => [
            'id' => '管理者ID',
            'email' => 'メールアドレス',
            'name' => '氏名',
            'first_name' => '氏名（名）',
            'last_name' => '氏名（姓）',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード（確認）',
            'free_word' => 'フリーワード',
            'last_login' => '最終ログイン日時',
            'role' => '種別',
            'suspend_flg' => '凍結措置',
        ]
    ],
    // ライター
    'writer' => [
        'attributes' => [
            'free_word' => 'フリーワード',
            'article_count' => '記事数',
            'email' => 'メールアドレス',
            'name' => '名前',
            'position' => '肩書',
            'writer_image' => '画像',
            INPUT_NAME_FOR_FILE_UPLOAD.'.'.config('project.writer.upload_file.image_input_name').'.'.INPUT_NAME_FOR_FILE_ORIGINAL_INDEX => '画像',
            'profile' => 'プロフィール',
            'link' => '外部リンク',
            'link_name' => '外部リンク名',
            'link_url' => '外部リンクURL',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード（確認）',
            'publish_flg' => '公開状態',
        ]
    ],
    // 会員
    'member' => [
        'attributes' => [
            'id' => '会員ID',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード（確認）',
            'nickname' => 'ニックネーム',
            'sex' => '性別',
            'birthday' => '生年月日',
            'pref_id' => '都道府県',
            'type' => '会員種別',
            'status' => '入会状態',
            'created_at' => '入会日時',
            'lankUp_dateTime' => 'ファンクラブ会員ランクアップ日時',
            'wakasa_customer_no' => 'お客様番号',
            'upload_image' => '画像',
            'comment_number' => 'コメント数',
            'good_number' => 'いいね！',
            'good_number_article' => 'いいね！した記事',
            'good_number_consultation' => 'いいね！したわんにゃ相談',
            'good_number_everyone' => 'いいね！したわんにゃ投稿',
            'favorite_number' => 'わんにゃ投稿 いいね',
            'best_ans_number' => 'ベストアンサー',
            'free_word' => 'フリーワード',
            'pet_picture' => 'うちの子 画像',
            'pet_name' => 'おなまえ',
            'pet_number' => 'うちの子 数',
            'pet_type_children' => '飼っているうちの子',
            'pet_type' => '種類',
            'pet_type_dog' => 'うちの子 種類（犬）',
            'pet_type_cat' => 'うちの子 種類（猫）',
            'pet_weight' => '体重',
            'pet_birthday_myChildren' => 'うちの子 生年月日',
            'pet_birthday' => 'おたんじょうび',
            'contribution_consultation' => '投稿したわんにゃ相談',
            'contribution_everyone' => '投稿したわんにゃ投稿',
            'birthday_from_date' => '生年月日（From）',
            'birthday_to_date' => '生年月日（To）',
            'pet_weight_from' => 'うちの子 体重（From）',
            'pet_weight_to' => 'うちの子 体重（To）',
            'pet_count_from' => 'うちの子 数（From）',
            'pet_count_to' => 'うちの子 数（To）',
            'start_sign_in' => '開始時間',
            'end_sign_in' => '終了時間',
            'start_sign_in_hour' => '開始時間（時）',
            'end_sign_in_hour' => '終了時間（時）',
            'start_sign_in_minute' => '開始時間（分）',
            'end_sign_in_minute' => '終了時間（分）',
            'pet_birthday_from_date' => 'おたんじょうび（From）',
            'pet_birthday_to_date' => 'おたんじょうび（To）',
            'withdrawal_reason' => '退会理由',
        ],
        'button' => [
            'pet_add' => 'うちの子を追加',
        ]
    ],
    // うちの子
    'pet' => [
        'attributes' => [
            'picture' => 'うちの子 画像',
            'name' => 'おなまえ',
            'number' => 'うちの子 数',
            'animal_category_id' => '種類',
            'type_children' => '飼っているうちの子',
            'type' => '種類',
            'sex' => '性別',
            'type_dog' => 'うちの子 種類（犬）',
            'type_cat' => 'うちの子 種類（猫）',
            'weight' => '体重',
            'birthday' => 'おたんじょうび',
        ]
    ],
    // 記事
    'article' => [
        'name' => '記事',
        // フォーム固有のラベル
        'attributes' => [
            'title' => 'タイトル',
            'body' => '本文',
            'hidden_image.top.org' => '画像(トップ用)',
            'list_image' => '画像(一覧用)',
            'publish_flg' => '公開状態',
            'user_id' => 'ライター',
            'category_id' => 'カテゴリー',
            'tags' => 'タグ',
            'recommend_display_flg' => 'おすすめ記事に表示する',
            'start_publish_date' => '公開期間の開始日',
            'start_publish_hour' => '公開期間(開始)の時間',
            'start_publish_minute' => '公開期間(開始)の分',
            'end_publish_date' => '公開期間の終了日',
            'end_publish_hour' => '公開期間(終了)の時間',
            'end_publish_minute' => '公開期間(終了)の分',
            'end_publish_time' => '公開期間（終了）',
            'comments.created_at' => '投稿日時',
            'comments.*.admin_check_flg' => '管理者確認',
            'comments.*.publish_flg' => '公開状態',
            'comments.*.violation_reports_flg' => '違反報告',
        ]
    ],
    // ダッシュボード
    'dashboard' => [
        'attributes' => [
            '*_date' => '指定年月日',
        ],
        'cooperation_attributes' => [
            'sort' => '並び順',
            'sort_type' => '並び順タイプ'
        ],
        'label' => [
            'common' => [
                'todays_wannnya_unset' => '今日のわんにゃが未設定です。(:date)'
            ],
            // タブ
            'tab' => [
                'number_of_posts_and_access' => '投稿数・アクセス数',
                'new_image_and_video' => '最新の画像/動画',
                'violation_report' => '違反報告',
                'member_cooperation_log' => '会員連携ログ'
            ],
            'tab_deco' => [
                'new_label' => '[NEW]',
            ],
            // トータル表
            'access_total' => [
                'members' => '会員数',
                'members_web' => '365Web会員',
                'members_fanclub' => 'ファンクラブ会員',
                'consultations' => 'わんにゃ相談の投稿数',
                'minna_no_wannyas' => 'わんにゃ投稿の投稿数'
            ],
            // チャートのラベル
            'chart' => [
                'consultations_chart' => '投稿数',
                'consultations_comment_chart' => 'コメント数',
                'wannya_chart' => '投稿数',
                'wannya_comment_chart' => 'コメント数',
                'advisors_chart' => '投稿数',
                'advisors_comment_chart' => 'コメント数',
                'members_chart_cnt1' => 'Web会員数',
                'members_chart_cnt2' => 'ファンクラブ会員数',
                'login_chart' => 'ログイン数'
            ],
            'cooperation_log_table' => [
                'customer_no' => 'お客様番号',
                'nickname' => 'ニックネーム',
                'cooperation_dt' => '連携日時',
                'read_csv_name' => '読み込みCSV名',
                'result' => '連携結果',
                'error_message' => 'エラーメッセージ',
            ],
        ],
        // チャート
        'chart' => [
            'consultations_chart' => 'わんにゃ相談の投稿数',
            'consultations_comment_chart' => 'わんにゃ相談のコメント数',
            'wannya_chart' => 'わんにゃの投稿数',
            'wannya_comment_chart' => 'わんにゃのコメント数',
            'advisors_chart' => 'わんにゃアドバイザーの投稿数',
            'advisors_comment_chart' => 'わんにゃアドバイザーのコメント数',
            'members_chart' => '365Web会員数・ファンクラブ会員数',
            'login_chart' => 'ログイン数'
        ],
        // 2本線表示のチャート
        'double_chart' => [
            'members_chart',
        ],
    ],
    // わんにゃ投稿
    'minna_no_wannya' => [
        'button' => [
            'today_wannya' => '今日のわんにゃ',
        ],
        'attributes' => [
            // 検索
            'free_word' => 'フリーワード',
            'created_at' => '投稿日時',
            // 編集
            'member_name' => '投稿者',
            'body' => 'タイトル',
            'admin_check_flg' => '管理者確認',
            'publish_flg' => '公開状態',
            'minna_no_wannya.admin_check_flg' => '管理者確認',
            'minna_no_wannya.publish_flg' => '公開状態',
            'todays_wannya_publish_date' => '今日のわんにゃ 公開日',
            'todays_wannya_staff' => '今日のわんにゃ 選定スタッフ',
            'todays_wannya_staff_comment' => '今日のわんにゃ スタッフコメント',
            'violation_reports_flg' => '違反報告',
            'upload_file' => '画像/動画',
            'comments.*.admin_check_flg' => '管理者確認',
            'comments.*.publish_flg' => '公開状態',
            'comments.*.violation_reports_flg' => '違反報告',
        ]
    ],
    // 今日のわんにゃ
    'todays_wannya' => [
        'search' => [
            'attributes' => [
                // 検索
                'year' => '年',
                'month' => '月',
                'staff' => '選定スタッフ'
            ]
        ],
        // フォーム固有のラベル
        'attributes' => [
            'user_id' => '選定スタッフ',
            'staff_comment' => 'スタッフコメント',
        ]
    ],
    //わんにゃ相談
    'wannya_consultation' => [
        'attributes' => [
            // 検索
            'free_word' => 'フリーワード',
            'created_at' => '投稿日時',
            // 編集
            'member_name' => '投稿者',
            'body' => 'タイトル',
            'admin_check_flg' => '管理者確認',
            'publish_flg' => '公開状態',
            'category_name'=> 'カテゴリー',
            'answer_close_flg'=>'回答を締め切る',
            'member_likes'=>'いいね！',
            'violation_reports_flg' => '違反報告',
            'upload_file' => '画像',
            'comments.*.admin_check_flg' => '管理者確認',
            'comments.*.publish_flg' => '公開状態',
            'comments.*.violation_reports_flg' => '違反報告',
            'pet_name' => 'おなまえ',
            'animal_category' => '飼ってるうちの子',
            'bleed' => '種類',
            'sex' => '性別',
            'birthday' => 'おたんじょうび',
            'weight' => '体重',
        ]
    ],
     //わんにゃアドバイザー
    'wannya_advisor' => [
        'attributes' => [
            // 検索
            'free_word' => 'フリーワード',
            'created_at' => '投稿日時',
            // 編集
            'member_name' => '投稿者',
            'body' => '質問',
            'publish_flg' => '公開状態',
            'category_name'=> 'カテゴリー',
            'admin_check_flg' => '管理者確認',
            'answer_close_flg'=>'回答を締め切る',
            'member_likes'=>'いいね！',
            'violation_reports_flg' => '違反報告',
            'upload_file' => '画像',
            'comments.*.admin_check_flg' => '管理者確認',
            'comments.*.publish_flg' => '公開状態',
            'comments.*.violation_reports_flg' => '違反報告',
            'pet_name' => 'おなまえ',
            'animal_category' => '飼っているうちの子',
            'bleed' => '種類',
            'sex' => '性別',
            'birthday' => 'おたんじょうび',
            'weight' => '体重',
        ]
    ],
    // キャンペーン
    'campaign' => [
        'status' => 'ステータス',
        'number_of_applicants' => '応募人数',
        'share' => 'シェア',
        'send-winners-mail-count' => '当選案内メール送信者数',
        'now-select-winners-count' => '現在の当選者選択数',
        'election-mail' => '当選案内メール送信フォーム',
        'attributes' => [
            'title' => 'タイトル',
            'body' => '本文',
            'hidden_image.campaign.org' => 'キャンペーン画像',
            'publish_flg' => '公開状態',
            'fun_club_only_flg' => 'ファンクラブ会員限定',
            'one_click_apply_flg' => 'ワンクリック応募',
            'start_publish_date' => '公開期間の開始日',
            'start_publish_hour' => '公開期間(開始)の時間',
            'start_publish_minute' => '公開期間(開始)の分',
            'end_publish_date' => '公開期間の終了日',
            'end_publish_hour' => '公開期間(終了)の時間',
            'end_publish_minute' => '公開期間(終了)の分',
            'end_publish_time' => '公開期間（終了）',
            'start_apply_date' => '応募期間の開始日',
            'start_apply_hour' => '応募期間(開始)の時間',
            'start_apply_minute' => '応募期間(開始)の分',
            'end_apply_date' => '応募期間の終了日',
            'end_apply_hour' => '応募期間(終了)の時間',
            'end_apply_minute' => '応募期間(終了)の分',
            'end_apply_time' => '応募期間（終了）',
            'info_display_flg' => 'お知らせに表示する',
            'max_winning_count' => '最大当選人数',
            'mail_title' => '当選案内メールタイトル',
            'mail_body' => '当選案内メール本文',
        ],
        // シェア
        'shares' => [
            'twitter' => 'Twitter',
            'facebook' => 'FaceBook',
        ],
        // 当選者情報
        'winners' => [
            'status' => [
                'select' => '選択中',
                'sent' => '送信済み',
                'not_send' => '送信待ち',
            ],
            'applicants_count' => '応募人数',
            'sent_mail_winners' => 'メール送信済みの当選者数',
            'not_send_mail_winners' => 'メール送信待ちの当選者数',
            'select_winners' => '現在選択中の当選者数',
            'total' => '当選者合計',
        ],
        'button' => [
            'election_mail' => '当選案内メール送信フォーム',
            'send_election_mail' => '当選案内メールを送信'
        ]
    ],
    // カテゴリー
    'category' => [
        'attributes' => [
            'name' => 'カテゴリー名',
            'type' => '種類',
            'sort_order' => '並び順',
            'publish_flg' => '公開状態',
        ],
    ],
    // 犬・猫の品種
    'animal_category' => [
        'attributes' => [
            'name' => '犬・猫の品種名',
            'type' => '種別',
            'size' => 'サイズ',
            'sort_order' => '並び順',
            'publish_flg' => '公開状態',
        ],
    ],
    // バナー
    'banner' => [
        'attributes' => [
            'free_word' => 'フリーワード',
            'publish_date' => '公開期間',
            'name' => 'バナー名',
            'pc_image' => '画像PC',
            INPUT_NAME_FOR_FILE_UPLOAD.'.'.config('project.banner.upload_file.pc_image_input_name').'.'.INPUT_NAME_FOR_FILE_ORIGINAL_INDEX => '画像PC',
            'sp_image' => '画像SP',
            INPUT_NAME_FOR_FILE_UPLOAD.'.'.config('project.banner.upload_file.sp_image_input_name').'.'.INPUT_NAME_FOR_FILE_ORIGINAL_INDEX => '画像SP',
            'text' => 'テキスト',
            'link_url' => 'リンクURL(PC用)',
            'click_tag' => 'クリック数計測タグ(PC用)',
            'link_url_sp' => 'リンクURL(SP用)',
            'click_tag_sp' => 'クリック数計測タグ(SP用)',
            'publish_flg' => '公開状態',
            'start_publish_time' => '公開期間（開始）',
            'start_publish_date' => '公開期間の開始日',
            'start_publish_hour' => '公開期間（開始）の時間',
            'start_publish_minute' => '公開期間（開始）の分',
            'end_publish_time' => '公開期間（終了）',
            'end_publish_date' => '公開期間の終了日',
            'end_publish_hour' => '公開期間（終了）の時間',
            'end_publish_minute' => '公開期間（終了）の分',
            'link_open_pattern' => 'リンク先の開き方',
            'display_place' => '表示位置',
        ],
    ],
    // 運営からのお知らせ
    'information' => [
        'attributes' => [
            'free_word' => 'フリーワード',
            'publish_date' => '公開期間',
            'title' => 'タイトル',
            'detail' => '詳細',
            'publish_flg' => '公開状態',
            'fan_club_only_flg' => 'ファンクラブ会員にのみ表示する',
            'start_publish_time' => '公開期間（開始）',
            'start_publish_date' => '公開期間の開始日',
            'start_publish_hour' => '公開期間（開始）の時間',
            'start_publish_minute' => '公開期間（開始）の分',
            'end_publish_time' => '公開期間（終了）',
            'end_publish_date' => '公開期間の終了日',
            'end_publish_hour' => '公開期間（終了）の時間',
            'end_publish_minute' => '公開期間（終了）の分',
        ],
    ],
    // NGワード
    'ng_word' => [
        'attributes' => [
            'free_word' => 'フリーワード',
            'word' => 'NGワード',
            'word_furigana' => 'ふりがな',
            'word_katakana' => 'カタカナ',
            'word_english' => '英語',
            'category_id' => 'カテゴリー',
            'enable_flg' => '有効状態',
        ],
    ],
    // メールマガジン
    'mail_magazine' => [
        'attributes' => [
            'mail_magazine_template_id' => 'テンプレート',
            'name' => 'メルマガ名',
            'subject' => '件名',
            'body' => '本文',
            'send_plan_date' => '送信日時の日付',
            'send_plan_hour' => '送信日時の時間',
            'send_plan_minute' => '送信日時の分',
        ],
        'search' => [
            'attributes' => [
                'birthday_from_date' => '生年月日（From）',
                'birthday_to_date' => '生年月日（To）',
                'pref_id' => '都道府県',
                'role_id' => '会員種別',
                'wakasa_customer_no_from' => 'お客様番号 (From)',
                'wakasa_customer_no_to' => 'お客様番号 (To)',
                'campaign_id' => 'キャンペーン応募',
                'start_sign_in' => '開始時間',
                'end_sign_in' => '終了時間',
                'start_sign_in_hour' => '開始時間（時）',
                'end_sign_in_hour' => '終了時間（時）',
                'start_sign_in_minute' => '開始時間（分）',
                'end_sign_in_minute' => '終了時間（分）',
                'pet_count_from' => 'うちの子 数（From）',
                'pet_count_to' => 'うちの子 数（To）',
                'pet_type_dog' => 'うちの子 種類（犬）',
                'pet_type_cat' => 'うちの子 種類（猫）',
                'pet_weight_from' => 'うちの子 体重（From）',
                'pet_weight_to' => 'うちの子 体重（To）',
                'pet_birthday_from_date' => 'うちの子 生年月日（From）',
                'pet_birthday_to_date' => 'うちの子 生年月日（To）',
                'login_count_from' => 'セッション数（ログイン数）(From)',
                'login_count_to' => 'セッション数（ログイン数）(To)',
                'wannya_count_from' => 'わんにゃ投稿数(From)',
                'wannya_count_to' => 'わんにゃ投稿数(To)',
                'wannya_consultation_count_from' => 'わんにゃ相談投稿数(From)',
                'wannya_consultation_count_to' => 'わんにゃ相談投稿数(To)',
                'comment_count_from' => 'コメント数（回答数）(From)',
                'comment_count_to' => 'コメント数（回答数）(To)',
                'like_given_count_from' => 'いいね数(From)',
                'like_given_count_to' => 'いいね数(To)',
                'facebook_share_count_from' => 'SNSシェア数 Facebook(From)',
                'facebook_share_count_to' => 'SNSシェア数 Facebook(To)',
                'twitter_share_count_from' => 'SNSシェア数 Twitter(From)',
                'twitter_share_count_to' => 'SNSシェア数 Twitter(To)',
            ],
        ]
    ],
    // タグ
    'tag' => [
        'attributes' => [
            'name' => 'タグ名',
            'tag_name' => 'タグ名',
            'publish_flg' => '公開状態',
            'sort_order' => '並び順',
            'result' => '検索結果',
        ],
    ],
];
