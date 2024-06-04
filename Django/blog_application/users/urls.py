from . import views
from django.urls import path

urlpatterns = [
    path("", views.index, name="index"),
    path("<str:name>/", views.user, name="user"), 
    path("profile/<str:name>/", views.profile, name="profile"),   
]