from django.shortcuts import render
from django.http import HttpResponse

def index(request):
    return HttpResponse('Hello, world')

def user(request, name):
    return render(request, 'user.html', {
        "name": name.capitalize()
    })

def profile(request, name):
    return HttpResponse(f'Hello, {name}')

def greet(request, name):
    return render(request, "hello/greet.html", {
        "name": name.capitalize()
    })