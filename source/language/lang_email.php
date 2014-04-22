<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello' => '您好',
	'moderate_member_invalidate' => '否決',
	'moderate_member_delete' => '刪除',
	'moderate_member_validate' => '通過',


	'get_passwd_subject' =>		'取回密碼說明',
	'get_passwd_message' =>		'
<p>{username}，
這封信是由 {bbname} 發送的。</p>

<p>您收到這封郵件，是由於這個郵箱地址在 {bbname} 被登記為用戶郵箱，
且該用戶請求使用 Email 密碼重置功能所致。</p>
<p>
----------------------------------------------------------------------<br />
<strong>重要！</strong><br />
----------------------------------------------------------------------</p>

<p>如果您沒有提交密碼重置的請求或不是 {bbname} 的註冊用戶，請立即忽略
並刪除這封郵件。只有在您確認需要重置密碼的情況下，才需要繼續閱讀下面的
內容。</p>
<p>
----------------------------------------------------------------------<br />
<strong>密碼重置說明</strong><br />
----------------------------------------------------------------------</p>
</p>
您只需在提交請求後的三天內，通過點擊下面的鏈接重置您的密碼：<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(如果上面不是鏈接形式，請將該地址手工粘貼到瀏覽器地址欄再訪問)</p>

<p>在上面的鏈接所打開的頁面中輸入新的密碼後提交，您即可使用新的密碼登錄網站了。您可以在用戶控制面板中隨時修改您的密碼。</p>

<p>本請求提交者的 IP 為 {clientip}</p>


<p>
此致<br />
</p>
<p>{bbname} 管理團隊.
{siteurl}</p>',


	'email_verify_subject' =>	'Email 地址驗證',
	'email_verify_message' =>	'<br />
<p>{username}，<br />
這封信是由 {bbname} 發送的。</p>

<p>您收到這封郵件，是由於在 {bbname} 進行了新用戶註冊，或用戶修改 Email 使用
了這個郵箱地址。如果您並沒有訪問過 {bbname}，或沒有進行上述操作，請忽
略這封郵件。您不需要退訂或進行其他進一步的操作。</p>
<br />
----------------------------------------------------------------------<br />
<strong>帳號激活說明</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>如果您是 {bbname} 的新用戶，或在修改您的註冊 Email 時使用了本地址，我們需
要對您的地址有效性進行驗證以避免垃圾郵件或地址被濫用。</p>

<p>您只需點擊下面的鏈接即可激活您的帳號：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(如果上面不是鏈接形式，請將該地址手工粘貼到瀏覽器地址欄再訪問)</p>

<p>感謝您的訪問，祝您使用愉快！</p>


<p>
此致<br />

{bbname} 管理團隊.<br />
{siteurl}</p>',

	'email_register_subject' =>	'論壇註冊地址',
	'email_register_message' =>	'<br />
<p>這封信是由 {bbname} 發送的。</p>

<p>您收到這封郵件，是由於在 {bbname} 獲取了新用戶註冊地址使用
了這個郵箱地址。如果您並沒有訪問過 {bbname}，或沒有進行上述操作，請忽
略這封郵件。您不需要退訂或進行其他進一步的操作。</p>
<br />
----------------------------------------------------------------------<br />
<strong>新用戶註冊說明</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>如果您是 {bbname} 的新用戶，或在修改您的註冊 Email 時使用了本地址，我們需
要對您的地址有效性進行驗證以避免垃圾郵件或地址被濫用。</p>

<p>您只需點擊下面的鏈接即可進行用戶註冊，以下鏈接有效期為3天。過期可以重新請求發送一封新的郵件驗證：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(如果上面不是鏈接形式，請將該地址手工粘貼到瀏覽器地址欄再訪問)</p>

<p>感謝您的訪問，祝您使用愉快！</p>


<p>
此致<br />

{bbname} 管理團隊.<br />
{siteurl}</p>',


	'add_member_subject' =>		'您被添加成為會員',
	'add_member_message' => 	'
{newusername} ，
這封信是由 {bbname} 發送的。<br />
<br />
我是 {adminusername} ，{bbname} 的管理者之一。您收到這封郵件，是由於您<br />
剛剛被添加成為 {bbname} 的會員，當前 Email 即是我們為您註冊的郵箱地址。<br />
<br />
----------------------------------------------------------------------<br />
重要！<br />
----------------------------------------------------------------------<br />
<br />
如果您對 {bbname} 不感興趣或無意成為會員，請忽略這封郵件。<br />
<br />
----------------------------------------------------------------------<br />
帳號信息<br />
----------------------------------------------------------------------<br />
<br />
網站名稱：{bbname}<br />
網站地址：{siteurl}<br />
<br />
用戶名：{newusername}<br />
密碼：{newpassword}<br />
<br />
從現在起您可以使用您的帳號登錄 {bbname}，祝您使用愉快！<br />
<br />
<br />
<br />
此致<br />
<br />
{bbname} 管理團隊.<br />
{siteurl}',


	'birthday_subject' =>		'祝您生日快樂',
	'birthday_message' => 		'<br />
{username}，<br />
這封信是由 {bbname} 發送的。<br />
<br />
您收到這封郵件，是由於這個郵箱地址在 {bbname} 被登記為用戶郵箱，<br />
並且按照您填寫的信息，今天是您的生日。很高興能在此時為您獻上一份<br />
生日祝福，我謹代表{bbname}管理團隊，衷心祝福您生日快樂。<br />
<br />
如果您並非 {bbname} 的會員，或今天並非您的生日，可能是有人誤用了您的郵<br />
件地址，或錯誤的填寫了生日信息。本郵件不會多次重複發送，請忽略這封郵件。<br />
<br />
<br />
此致<br />
<br />
{bbname} 管理團隊.<br />
{siteurl}',

	'email_to_friend_subject' =>	'{$_G[member][username]} 推薦給您: $thread[subject]',
	'email_to_friend_message' =>	'<br />
這封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 發送的。<br />
<br />
您收到這封郵件，是由於在 {$_G[member][username]} 通過 {$_G[setting][bbname]} 的「推薦給朋友」<br />
功能推薦了如下的內容給您。如果您對此不感興趣，請忽略這封郵件。您不需要退訂或進行其他進一步的操作。<br />
<br />
----------------------------------------------------------------------<br />
信件原文開始<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
信件原文結束<br />
----------------------------------------------------------------------<br />
<br />
請注意這封信僅僅是由用戶使用 「推薦給朋友」發送的，不是網站官方郵件，<br />
網站管理團隊不會對這類郵件負責。<br />
<br />
歡迎您訪問 {$_G[setting][bbname]}<br />
$_G[siteurl]',

	'email_to_invite_subject' =>	'您的朋友 {$_G[member][username]} 發送 {$_G[setting][bbname]} 網站註冊邀請碼給您',
	'email_to_invite_message' =>	'<br />
$sendtoname,<br />
這封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 發送的。<br />
<br />
您收到這封郵件，是由於 {$_G[member][username]} 通過 {bbname} 的「發送邀請碼給朋友」<br />
功能推薦了如下的內容給您。如果您對此不感興趣，請忽略這封郵件。您不需要退訂或進行其他進<br />
一步的操作。<br />
<br />
----------------------------------------------------------------------<br />
信件原文開始<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
信件原文結束<br />
----------------------------------------------------------------------<br />
<br />
請注意這封信僅僅是由用戶使用 「發送邀請碼給朋友」發送的，不是網站官方郵件，<br />
網站管理團隊不會對這類郵件負責。<br />
<br />
歡迎您訪問 {$_G[setting][bbname]}<br />
$_G[siteurl]',


	'moderate_member_subject' =>	'用戶審核結果通知',
	'moderate_member_message' =>	'<br />
<p>{username},
這封信是由 {bbname} 發送的。</p>

<p>您收到這封郵件，是由於這個郵箱地址在 {bbname} 被新用戶註冊時所
使用，且管理員設置了對新用戶需要進行人工審核，本郵件將通知您提交
申請的審核結果。</p>
<br />
----------------------------------------------------------------------<br />
<strong>註冊信息與審核結果</strong><br />
----------------------------------------------------------------------<br />
<br />
用戶名: {username}<br />
註冊時間: {regdate}<br />
提交時間: {submitdate}<br />
提交次數: {submittimes}<br />
註冊原因: {message}<br />
<br />
審核結果: {modresult}<br />
審核時間: {moddate}<br />
審核管理員: {adminusername}<br />
管理員留言: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>審核結果說明</strong><br />
----------------------------------------------------------------------<br />

<p>通過: 您的註冊已通過審核，您已成為 {bbname} 的正式用戶。</p>

<p>否決: 您的註冊信息不完整，或未滿足我們對新用戶的某些要求，您可以
	  根據管理員留言，<a href="home.php?mod=spacecp&ac=profile" target="_blank">完善您的註冊信息</a>，然後再次提交。</p>

<p>刪除：您的註冊由於與我們的要求偏差較大，或本站的新註冊人數已
	  超過預期，申請已被否決。您的帳號已從數據庫中刪除，將無法
	  再使用其登錄或提交再次審核，請您諒解。</p>

<br />
<br />
此致<br />
<br />
{bbname} 管理團隊.<br />
{siteurl}',

	'adv_expiration_subject' =>	'您站點的廣告將於 {day} 天後到期，請及時處理',
	'adv_expiration_message' =>	'您站點的以下廣告將於 {day} 天後到期，請及時處理：<br /><br />{advs}',
	'invite_payment_email_message' => '
歡迎您光臨{bbname}（{siteurl}），您的訂單{orderid}已經支付完成，訂單已確認有效。<br />
<br />----------------------------------------------------------------------<br />
以下是您獲得的邀請碼
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
重要！
<br />----------------------------------------------------------------------<br />',
);

?>