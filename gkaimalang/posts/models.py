import uuid
from django.db import models

# Create your models here.
class Post(models.Model):
    title = models.CharField(max_length=200, default='')
    content = models.TextField(default='')
    author = models.CharField(max_length=100, default='anonymous')

    class Meta:
        db_table = 'posts'