# Essa aula é para o jogo de plataforma 2D, onde o personagem pode andar, pular e atirar. Foi passada no dia 20/03/2025 pelo professor Leandro Mota.


#extends KinematicBody2D

# var animar_respirando = false
# var animar_andando    = false
# var animar_pulando    = false
# var animar_atirando   = false

# var forca_pulo = 900
# var aceleracao_x = 450
# var aceleracao_y = 40
# var velocidade = Vector2.ZERO

# func _ready():
#     pass # Replace with function body.

# func _process(delta):
#     velocidade.x = 0
#     velocidade.y += aceleracao_y

#     if (Input.is_action_pressed("ui_left")):
#         velocidade.x = -aceleracao_x
#         $Sprite.flip_h = true
#     elif (Input.is_action_pressed("ui_right")):
#         velocidade.x = aceleracao_x
#         $Sprite.flip_h = false


#     if (is_on_floor() and animar_atirando == false):
#         if (velocidade.x!=0):
#             $AnimationPlayer.play("andando")
#         else:
#             $AnimationPlayer.play("respirando")

#     if (Input.is_action_just_pressed("ui_up") and is_on_floor()):
#         $AnimationPlayer.play("pulando")
#         velocidade.y = -forca_pulo

#     if (Input.is_action_just_pressed("ui_accept") and is_on_floor()):
#         $AnimationPlayer.play("atirando")
#         animar_atirando = true


#     velocidade = move_and_slide(velocidade, Vector2.UP)

# func fim_animacao(anim_name):
#     if (anim_name=="atirando"):
#         animar_atirando = false