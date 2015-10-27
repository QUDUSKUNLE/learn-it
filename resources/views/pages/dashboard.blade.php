@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="section">
        <div class="row">
            <div class="col s12 m4 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $user->profile->avatar }}" />
                        <span class="card-title">{{isset($user->username) ? : $user->profile->first_name }}</span>
                    </div>
                    <div class="card-action brown lighten-2">
                        <a class="black-text" href="update-profile">Edit Profile</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m8 l6">
                <div class="row float-up chip red" id="video_form_toggle">Post
                    <i class="material-icons">add</i>
                </div>

                <div class="row" id="video_form">
                    <form method="post" action="video-post">
                        {{ csrf_field() }}
                        <h5>Submit a Youtube link to the video</h5>
                        <div class="col s12">
                            <div class="input-field">
                                <input type="text" name="title" required id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="input-field">
                                <textarea class="materialize-textarea" placeholder="Description" name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="col s8">
                            <div class="input-field">
                                <input type="url" name="url" required id="url" placeholder="Video URL" class="validate">
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="input-field brown lighten-2">
                                <select name="category" required id="category" class="browser-default">
                                    <option value="" selected>Select appropriate category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12">
                            <button class="btn waves-effect waves-light brown lighten-2" type="submit" name="action">Post
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col s12 m8 l8">
                <div class="row" id="videos">
                    @foreach($user->videos as $video)
                        <div class="col s12 m4 l6">
                            <div class="card">
                                <div class="video-container">
                                    <iframe width="640" height="360" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="card-content brown lighten-2">
                                    <span class="card-title activator">{{ $video->title }}<i class="material-icons right">more_vert</i></span>
                                </div>
                                <div class="card-reveal brown lighten-2">
                                    <span class="card-title">{{ $video->title }}<i class="material-icons right">close</i></span>
                                    <p>Category: {{ $video->category->name }}</p>
                                    <p>Description: {{ $video->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection