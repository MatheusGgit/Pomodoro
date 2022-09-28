from django.db import models
from django.utils import timezone

# Create your models here.
class Usuario(models.Model):
    nome = models.CharField(max_length=255)
    email = models.CharField(max_length=255)
    senha = models.CharField(max_length=255)
    data_criacao = models.DateTimeField(default=timezone.now)
    lembrarsenha = models.BooleanField(default=False)
    objects = models.Manager()

    def __str__(self):
        return self.nome