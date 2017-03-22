using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.EventSystems;

public class Drag : MonoBehaviour {

    public float distance;

    public bool PointerDown
    {
        get;
        private set;
    }

    // Use this for initialization
    void Start () {

    }

    // Update is called once per frame
    public void OnPointerDown()
    {
        PointerDown = true;

        Vector3 mousePosition = new Vector3(Input.mousePosition.x, Input.mousePosition.y, distance);
        Vector3 objPosition = Camera.main.ScreenToWorldPoint(mousePosition);

        transform.position = objPosition;
    }

    public void OnPointerUp()
    {
        PointerDown = false;
    }





}
