using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BoneStepMenu : MonoBehaviour
{

    public Vector3 Deplacement;
    public float Speed = 10.0F;
    public int smooth = 5;
    public int tiltAngle = 45;
    public float RotationInitial = 180;
    public float StepRotationMin;

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

        float RotationZ = Input.GetAxis("VideHorizontal") * Speed;
        RotationZ *= Time.deltaTime;
        transform.Rotate(-Vector3.up, RotationZ * Speed);


        float tiltAroundZ = StepRotationMin + Input.GetAxis("VideHorizontal") * tiltAngle;
        float anglerotx = Input.GetAxis("VideVertical") * tiltAngle;
        Quaternion target = Quaternion.Euler(-anglerotx, RotationInitial, tiltAroundZ);
        transform.rotation = Quaternion.Slerp(transform.rotation, target, Time.deltaTime * smooth);

    }
}