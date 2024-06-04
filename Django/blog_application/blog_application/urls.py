from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path('admin/', admin.site.urls),
    path('users/', include('users.urls')),
    path('new_year/', include('new_year.urls')),
    path('tasks/', include('tasks.urls')),
    path('flights/', include('flights.urls')),
]
