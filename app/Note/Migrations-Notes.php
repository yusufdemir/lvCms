USER
name:string:nullable, surname:string:nullable, email:string:unique, password:string, active:boolean, deleted:boolean, vis:enum, remember_token:string:nullable

CATS
name:string, description:string:nullable

POSTS
head:string, slug:string:unique, media:string:nullable, content:text:nullable, user_id:integer:unsigned, cat_id:integer:unsigned:default(1), active:boolean:default(true), deleted:boolean:default(false), publish_date:timestamp, slider:boolean:default(false), sidebar:boolean:default(true)

PAGES/**/
head:string, slug:string:unique, media:string:nullable, content:text:nullable, user_id:integer:unsigned, active:boolean:default(true), deleted:boolean:default(false), sidebar:boolean:default(true)

ALBUMS
name:string, description:string:nullable, user_id:integer:unsigned

PHOTOS
link:string, name:string:nullable, alt:string:nullable, user_id:integer:unsigned

OTHER_MEDİAS
media_data:string, media_type:enum, name:string:nullable, description:string:nullable, user_id:integer:unsigned