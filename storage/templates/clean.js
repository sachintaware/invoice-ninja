{
    "content": [{
        "columns": [
            {
                "image": "$accountLogo",
                "fit": [120, 80]
            },
            {
                "stack": "$accountDetails",
                "margin": [40, 0, 0, 0]
            },
            {
                "stack": "$accountAddress"
            }
        ]
    },
    {
        "text": "$entityTypeUC",
        "margin": [8, 30, 8, 5],
        "style": "entityTypeLabel"
        
    },
    {
        "table": {
            "headerRows": 1,
            "widths": ["auto", "auto", "*"],
            "body": [
                [
                {
                    "table": { 
                        "body": "$invoiceDetails"
                    },
                    "margin": [0, 4, 12, 4],
                    "layout": "noBorders"
                }, 
                {
                    "stack": "$clientDetails"
                },
                {
                    "text": ""
                }
                ]
            ]
        },
        "layout": {
            "hLineWidth": "$firstAndLast:.5",
            "vLineWidth": "$none",
            "hLineColor": "#D8D8D8",
            "paddingLeft": "$amount:8", 
            "paddingRight": "$amount:8", 
            "paddingTop": "$amount:4", 
            "paddingBottom": "$amount:4"            
        }
    },
    {
        "style": "invoiceLineItemsTable",
        "table": {
            "headerRows": 1,
            "widths": "$invoiceLineItemColumns",
            "body": "$invoiceLineItems"
        },
        "layout": {
            "hLineWidth": "$notFirst:.5",
            "vLineWidth": "$none",
            "hLineColor": "#D8D8D8",
            "paddingLeft": "$amount:8", 
            "paddingRight": "$amount:8", 
            "paddingTop": "$amount:14", 
            "paddingBottom": "$amount:14"            
        }
    },
    {
        "columns": [        
            "$notesAndTerms",
            {
                "table": {
                    "widths": ["*", "40%"],
                    "body": "$subtotals"
                },
                "layout": {
                    "hLineWidth": "$none",
                    "vLineWidth": "$none",
                    "paddingLeft": "$amount:34", 
                    "paddingRight": "$amount:8", 
                    "paddingTop": "$amount:4", 
                    "paddingBottom": "$amount:4" 
                }
            }
        ]
    }
    ],
    "defaultStyle": {
        "fontSize": "$fontSize",
        "margin": [8, 4, 8, 4]
    },
    "footer": {
        "columns": [
            {
                "text": "$invoiceFooter",
                "alignment": "left"
            }
        ],
        "margin": [40, -20, 40, 0]
    },
    "styles": {
        "entityTypeLabel": {
            "fontSize": "$fontSizeLargest",
            "color": "$primaryColor:#37a3c6"
        },
        "primaryColor":{
            "color": "$primaryColor:#37a3c6"
        },
        "accountName": {
            "color": "$primaryColor:#37a3c6",
            "bold": true
        },
        "invoiceDetails": {
            "margin": [0, 0, 8, 0]
        }, 
        "accountDetails": {
            "margin": [0, 2, 0, 2]
        },
        "clientDetails": {
            "margin": [0, 2, 0, 2]
        },
        "notesAndTerms": {
            "margin": [0, 2, 0, 2]
        },
        "accountAddress": {
            "margin": [0, 2, 0, 2]
        },
        "odd": {
            "fillColor": "#fbfbfb"
        },
        "productKey": {
            "color": "$primaryColor:#37a3c6",
            "bold": true
        },
        "balanceDueLabel": {
            "fontSize": "$fontSizeLarger"
        },
        "balanceDue": {
            "fontSize": "$fontSizeLarger",
            "color": "$primaryColor:#37a3c6"
        },  
        "invoiceNumber": {
            "bold": true
        },
        "tableHeader": {
            "bold": true,
            "fontSize": "$fontSizeLarger"
        },
        "invoiceLineItemsTable": {
            "margin": [0, 16, 0, 16]
        },
        "clientName": {
            "bold": true
        },
        "cost": {
            "alignment": "right"
        },
        "quantity": {
            "alignment": "right"
        },
        "tax": {
            "alignment": "right"
        },
        "lineTotal": {
            "alignment": "right"
        },
        "subtotals": {
            "alignment": "right"
        },            
        "termsLabel": {
            "bold": true
        }           
    },
    "pageMargins": [40, 40, 40, 60]
}