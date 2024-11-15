from django.shortcuts import render, redirect

# Create your views here.
def index(requets):
    return render(requets, 'mainapp/index.html', {
        'title': 'Inicio',
        'content': '..:: Esta es mi Pagina de Inicio ::..'
    })
def about(requets):
    return render(requets, 'mainapp/about.html', {
        'title': 'Acerca de',
        'content': 'este es el acerca de'
    })
def mision(requets):
    return render(requets, 'mainapp/mision.html', {
        'title': 'Mision',
    })
def vision(requets):
    return render(requets, 'mainapp/vision.html', {
        'title':'Vision'
    })

#Redirigir primer forma
def error404(requets, exception):
    return redirect('inicio')

#Redirigir segunda forma

def error404_2(requets, exception):
    return render(requets, 'mainapp/404.html')