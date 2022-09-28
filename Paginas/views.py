from django.shortcuts import render, redirect
from django.contrib import messages
from .models import Usuario

# Create your views here.

def index(request):
    if request.method != 'POST':
        # Tentar dar um jeito de fazer o usuario logar automaticamente se ele colocar pra lembrar a senha
        return render(request, 'Paginas/index.html')
    else:
        email = request.POST.get('email')
        senha = request.POST.get('psw')

        if Usuario.objects.filter(email = email, senha = senha):
            return redirect('dashboard')
        else:
            messages.error(request, 'Email ou senha incorretos')
            return redirect('index')


def dashboard(request):
    messages.success(request, 'Seja bem vindo, Bons estudos!')
    return render(request, 'Paginas/dashboard.html')

def register(request):
    def return_to_same_page():
        return render(request, 'Paginas/register.html')
    if request.method != 'POST':
        return return_to_same_page()
    else:
        nome = request.POST.get('uname')
        email = request.POST.get('email')
        senha = request.POST.get('psw')
        lembrarSenha = request.POST.get('remember')
        emailSplit = email.split('@')
        print(emailSplit[1])
        print(lembrarSenha)

        if Usuario.objects.filter(email=email).exists():
            return_to_same_page()

        elif len(senha) < 8:
            return_to_same_page()

        elif emailSplit[1] != 'gmail.com':
            return_to_same_page()
        else:
            if lembrarSenha == 'on':
                lembrarSenha = True
            else:
                lembrarSenha = False
            user = Usuario(nome = nome, email = email, senha = senha, lembrarsenha = lembrarSenha)
            user.save()
            return redirect('index')
        return render(request, 'Paginas/register.html')