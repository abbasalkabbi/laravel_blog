@extends('Layout.master')
@section('title','home')
@section('content')
<div class="">
@for($i=0;$i<5;$i++)
<!----post--->
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="d-flex justify-content-between p-2 px-3">
                    <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/UXdKE3o.jpg" width="50" class="rounded-circle">
                        <div class="d-flex flex-column ml-2"> <span class="font-weight-bold">Jeanette Sun</span> <small class="text-primary">Collegues</small> </div>
                    </div>
                    <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2">20 mins</small> <i class="fa fa-ellipsis-h"></i> </div>
                </div> 
                <div class="p-2">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center"> <i class="fa fa-heart"></i> <i class="fa fa-smile-o ml-2"></i> </div>
                        <div class="d-flex flex-row muted-color"> <span>2 comments</span> <span class="ml-2">Share</span> </div>
                    </div>
                    <hr>
                    <div class="comments">
                        <div class="d-flex flex-row mb-2"> <img src="https://i.imgur.com/9AZ2QX1.jpg" width="40" class="rounded-image">
                            <div class="d-flex flex-column ml-2"> <span class="name">Daniel Frozer</span> <small class="comment-text">I like this alot! thanks alot</small>
                                <div class="d-flex flex-row align-items-center status"> <small>Like</small> <small>Reply</small> <small>Translate</small> <small>18 mins</small> </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-2"> <img src="https://i.imgur.com/1YrCKa1.jpg" width="40" class="rounded-image">
                            <div class="d-flex flex-column ml-2"> <span class="name">Elizabeth goodmen</span> <small class="comment-text">Thanks for sharing!</small>
                                <div class="d-flex flex-row align-items-center status"> <small>Like</small> <small>Reply</small> <small>Translate</small> <small>8 mins</small> </div>
                            </div>
                        </div>
                        
                        <form class="comment-input" action="{{route('addcomment.post')}}" method="POST"> 
                            @csrf
                            <input type="text" class="form-control" name="comment">
                            <div  class="fonts ">
                                <button type="submit" class="btn btn-primary  btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                      </svg>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----end post--->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #eee;
    font-family: "Poppins", sans-serif;
    font-weight: 300
}

.card {
    border: none
}

.ellipsis {
    color: #a09c9c
}

hr {
    color: #a09c9c;
    margin-top: 4px;
    margin-bottom: 8px
}

.muted-color {
    color: #a09c9c;
    font-size: 13px
}

.ellipsis i {
    margin-top: 3px;
    cursor: pointer
}

.icons i {
    font-size: 25px
}

.icons .fa-heart {
    color: red
}

.icons .fa-smile-o {
    color: yellow;
    font-size: 29px
}

.rounded-image {
    border-radius: 50% !important;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 50px
}

.name {
    font-weight: 600
}

.comment-text {
    font-size: 12px
}

.status small {
    margin-right: 10px;
    color: blue
}

.form-control {
    border-radius: 26px
}

.comment-input {
    position: relative
}

.fonts {
    position: absolute;
    right: 13px;
    top: 4px;
    color: #a09c9c
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none
}
</style>
@endfor
</div>
@endsection