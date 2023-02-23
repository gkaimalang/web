from django.shortcuts import render

def posts(request):
    return render(request, 'posts/posts.html')

def post(request, id):
    context = {'id': id}
    return render(request, 'posts/post.html', context)