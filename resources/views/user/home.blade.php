@extends('layouts.app')

@section('content')
    <style>
.container {
    display: flex;
    justify-content: center; /* Center the content horizontally */
    align-items: center; /* Center the content vertically */
    height: 100vh; /* Set container height to viewport height */
}

.blog-list {
    width: 100%;
    max-width: 800px; /* Limit the width of the blog list */
}

.blog-post {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px; /* Add margin between blog posts */
}

.blog-post h2 {
    margin-bottom: 10px;
}

.blog-post p {
    margin-bottom: 15px;
}

.blog-post a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.blog-post a:hover {
    text-decoration: underline;
}


    </style>
    <div class="container">
        <h1>Recent Blog Posts</h1>
        <div class="blog-list">
            <!-- Example blog post div -->
            <div class="blog-post">
                <h2>Blog Post Title</h2>
                <p>Posted on January 1, 2023 by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit velit quis ex ultrices, ac elementum nulla lobortis.</p>
                <a href="#">Read More</a>
            </div>

            <!-- Example blog post div -->
            <div class="blog-post">
                <h2>Another Blog Post Title</h2>
                <p>Posted on January 2, 2023 by Jane Smith</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit velit quis ex ultrices, ac elementum nulla lobortis.</p>
                <a href="#">Read More</a>
            </div>
            
            
        </div>
    </div>
@endsection
