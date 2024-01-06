{{ $request->username }}様

この度は、CSオートディーラーへご応募いただきありがとうございます。
後ほど採用担当者よりご連絡をさせていただきます。

ご入力内容
===================================
お名前：{{ $request->username }}
カナ：{{ $request->kana }}
性別：{{ $request->gender }}
メールアドレス：{{ $request->email }}
年齢：{{ $request->age }}
電話番号：{{ $request->tel }}
ご住所：{{ $request->address }}
希望職種：{{ $request->job }}
備考：{{ $request->content }}
===================================
※このメールは送信専用のため返信できません。
