@extends('layout.layout')
@section('title')
--ロッテ選手データベース--
@endsection
@section('content')
            <h1>千葉ロッテ背番号入力</h1>

            <form accept-charset="utf-8" method="post" action="index.php">
                名前：<br />
                <input type="text" name="name" required /><br />
                背番号：<br />
                <input type="text" name="number" required />（3桁まで）<br />
                誕生日：<br />
                <input type="text" name="BirthDate" required/>ex.1980.12.01、1980-12-01、19801201<br />
                <input type="radio" name="position" value="監督コーチ" /> 監督コーチ
                <input type="radio" name="position" value="投手" /> 投手
                <input type="radio" name="position" value="捕手" />捕手
                <input type="radio" name="position" value="内野手" /> 内野手
                <input type="radio" name="position" value="外野手" /> 外野手<br />

                <input type="submit" name="button" id="insert" value="登録" />
                <input type="submit" name="button" id="update" value="更新" />
                <input type="submit" name="button" id="delete" value="削除" />
            </form>
            <table border=1>
              <thead>
                <tr>
                  <th>名前</th><th>背番号</th><th>誕生日</th><th>年齢</th><th>ポジション</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($memberData as $value)
                    <tr>
                        <td> {{ $value->name }}</td>
                        <td> {{ $value->number }}</td>
                        <td> {{ $value->BirthDate }}</td>
                        <td> {{ $value->age }}</td>
                        <td> {{ $value->position }}</td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
@endsection
@section('scripts')

@endsection
