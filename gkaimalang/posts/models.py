import uuid
from django.db import models

# Create your models here.
class Post(models.Model):
    id = models.UUIDField(default=uuid.uuid4, unique=True,
                            primary_key=True, editable=False)
    title = models.CharField(max_length=200)

    class Meta:
        db_table = 'posts'