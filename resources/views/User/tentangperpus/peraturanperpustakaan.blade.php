@extends('User.template')
@section('content')

<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Peraturan Perpustakaan</h1>
    <div style="position: relative;">
        <hr style="height: 4px; 
            border-top-width: 1px;
            border-color: 3px solid #6F410B; 
            margin: 20px auto;
            border-radius: 20px;
            width: 17%;">
    </div>
</div>


<div class="card" style="background-color: #E7E7E7; padding: 40px;">
<div class="isi">
    <strong>Membership:</strong><br>
    Membership of Del Polytechnic of Informatics Library is available for:
    <ol>
        <li>Students of Del Polytechnic of Informatics</li>
        <li>Lecturers of Del Polytechnic of Informatics</li>
        <li>Administrations staff of Del Polytechnic of Informatics</li>
    </ol>

    <strong>A. Pre-requisites</strong>
    <ol>
        <li>Completion of an application form</li>
        <li>Two Passport-sized photos</li>
        <li>Display of school free recipes</li>
        <li>Display of ID cards
            <ul>
                <li>a. Students: Student ID Card</li>
                <li>b. Lecturers: Lecturer Card</li>
                <li>c. Administrations Staff: Administrations Staff Card</li>
            </ul>
        </li>
        <li>Membership is acknowledged around one week after registration and a card will be presented</li>
    </ol>

    <strong>B. Cancellation of membership applies if:</strong>
    <ol>
        <li>If a library member breaks library regulations and/or a valid regulation of Del Polytechnic of Informatics Library (The cancellation stands at one month)</li>
        <li>If a member breaks library regulations repeatedly then the cancellation is irreversible. However, a student may still enter the library but is forbidden from borrowing or checking out library books.</li>
    </ol>
    </div>
</div>
@endsection
