extends KinematicBody2D

var velocidade = 400
var mov = Vector2.ZERO
func _process(delta):
	mov = Vector2.ZERO
	if (Input.is_action_pressed("ui_left")):
		mov.x = -velocidade
	elif (Input.is_action_pressed("ui_right")):
		mov.x = velocidade
	
	if (Input.is_action_pressed("ui_up")):
		mov.y = -velocidade
	elif (Input.is_action_pressed("ui_down")):
		mov.y = velocidade
	
	mov = move_and_slide(mov)