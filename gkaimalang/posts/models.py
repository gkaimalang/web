import uuid
from django.db import models

# Create your models here.
class Post(models.Model):
    id = models.BigAutoField(primary_key=True)
    title = models.CharField(max_length=200, default='')
    content = models.TextField(default='')
    author = models.CharField(max_length=100, default='anonymous')
    created = models.DateTimeField(auto_now_add=True),

    class Meta:
        db_table = 'posts'
    
    def __str__(self):
        return self.title