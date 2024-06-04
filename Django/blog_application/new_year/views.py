from django.shortcuts import render
from datetime import date

def index(request):
    today = date.today()
    now_date = today.month == 1 and today.day == 1

    return render(request, 'is_it_new_year.html', {
        'validate_new_year': now_date
    })
