var classes = [
    {
        "name": "MailSender",
        "interface": false,
        "methods": [
            {
                "name": "sendMail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 3,
        "ccnMethodMax": 3,
        "externals": [
            "PHPMailer"
        ],
        "parents": [],
        "lcom": 1,
        "length": 159,
        "vocabulary": 59,
        "volume": 935.34,
        "difficulty": 4.68,
        "effort": 4373.58,
        "level": 0.21,
        "bugs": 0.31,
        "time": 243,
        "intelligentContent": 200.03,
        "number_operators": 58,
        "number_operands": 101,
        "number_operators_unique": 5,
        "number_operands_unique": 54,
        "cloc": 29,
        "loc": 308,
        "lloc": 227,
        "mi": 50.28,
        "mIwoC": 27.4,
        "commentWeight": 22.88,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 0.56,
        "relativeSystemComplexity": 64.56,
        "totalStructuralComplexity": 64,
        "totalDataComplexity": 0.56,
        "totalSystemComplexity": 64.56,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "Verify",
        "interface": false,
        "methods": [
            {
                "name": "verifyUser",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "DbConn",
            "DbConn"
        ],
        "parents": [
            "DbConn"
        ],
        "lcom": 1,
        "length": 40,
        "vocabulary": 20,
        "volume": 172.88,
        "difficulty": 4.67,
        "effort": 806.76,
        "level": 0.21,
        "bugs": 0.06,
        "time": 45,
        "intelligentContent": 37.05,
        "number_operators": 12,
        "number_operands": 28,
        "number_operators_unique": 5,
        "number_operands_unique": 15,
        "cloc": 2,
        "loc": 22,
        "lloc": 20,
        "mi": 78.33,
        "mIwoC": 55.82,
        "commentWeight": 22.51,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.6,
        "relativeSystemComplexity": 16.6,
        "totalStructuralComplexity": 16,
        "totalDataComplexity": 0.6,
        "totalSystemComplexity": 16.6,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "DbConn",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "PDO"
        ],
        "parents": [],
        "lcom": 1,
        "length": 38,
        "vocabulary": 16,
        "volume": 152,
        "difficulty": 2.88,
        "effort": 438.46,
        "level": 0.35,
        "bugs": 0.05,
        "time": 24,
        "intelligentContent": 52.69,
        "number_operators": 13,
        "number_operands": 25,
        "number_operators_unique": 3,
        "number_operands_unique": 13,
        "cloc": 7,
        "loc": 29,
        "lloc": 22,
        "mi": 89.79,
        "mIwoC": 55.3,
        "commentWeight": 34.49,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 1,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 1,
        "pageRank": 0.05,
        "afferentCoupling": 4,
        "efferentCoupling": 1,
        "instability": 0.2,
        "violations": {}
    },
    {
        "name": "GlobalConf",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addAttempt",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "resetAttempts",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 3,
        "length": 23,
        "vocabulary": 11,
        "volume": 79.57,
        "difficulty": 0.8,
        "effort": 63.65,
        "level": 1.25,
        "bugs": 0.03,
        "time": 4,
        "intelligentContent": 99.46,
        "number_operators": 7,
        "number_operands": 16,
        "number_operators_unique": 1,
        "number_operands_unique": 10,
        "cloc": 0,
        "loc": 24,
        "lloc": 24,
        "mi": 56.45,
        "mIwoC": 56.45,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "SelectEmail",
        "interface": false,
        "methods": [
            {
                "name": "emailPull",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "DbConn",
            "DbConn"
        ],
        "parents": [
            "DbConn"
        ],
        "lcom": 1,
        "length": 29,
        "vocabulary": 14,
        "volume": 110.41,
        "difficulty": 3.8,
        "effort": 419.57,
        "level": 0.26,
        "bugs": 0.04,
        "time": 23,
        "intelligentContent": 29.06,
        "number_operators": 10,
        "number_operands": 19,
        "number_operators_unique": 4,
        "number_operands_unique": 10,
        "cloc": 1,
        "loc": 19,
        "lloc": 18,
        "mi": 75.58,
        "mIwoC": 58.18,
        "commentWeight": 17.4,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 25.33,
        "totalStructuralComplexity": 25,
        "totalDataComplexity": 0.33,
        "totalSystemComplexity": 25.33,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "LoginForm",
        "interface": false,
        "methods": [
            {
                "name": "checkLogin",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "insertAttempt",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateAttempts",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 4,
        "ccnMethodMax": 3,
        "externals": [
            "DbConn",
            "GlobalConf",
            "DbConn",
            "DbConn",
            "GlobalConf",
            "DbConn",
            "GlobalConf",
            "LoginForm"
        ],
        "parents": [
            "DbConn"
        ],
        "lcom": 3,
        "length": 303,
        "vocabulary": 62,
        "volume": 1804.12,
        "difficulty": 19.52,
        "effort": 35215.06,
        "level": 0.05,
        "bugs": 0.6,
        "time": 1956,
        "intelligentContent": 92.43,
        "number_operators": 100,
        "number_operands": 203,
        "number_operators_unique": 10,
        "number_operands_unique": 52,
        "cloc": 9,
        "loc": 122,
        "lloc": 113,
        "mi": 52.3,
        "mIwoC": 31.88,
        "commentWeight": 20.42,
        "kanDefect": 0.5,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.72,
        "relativeSystemComplexity": 25.72,
        "totalStructuralComplexity": 75,
        "totalDataComplexity": 2.17,
        "totalSystemComplexity": 77.17,
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 4,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "RespObj",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 8,
        "vocabulary": 4,
        "volume": 16,
        "difficulty": 1,
        "effort": 16,
        "level": 1,
        "bugs": 0.01,
        "time": 1,
        "intelligentContent": 16,
        "number_operators": 2,
        "number_operands": 6,
        "number_operators_unique": 1,
        "number_operands_unique": 3,
        "cloc": 0,
        "loc": 11,
        "lloc": 11,
        "mi": 68.72,
        "mIwoC": 68.72,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 2,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "NewUserForm",
        "interface": false,
        "methods": [
            {
                "name": "createUser",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "DbConn",
            "DbConn"
        ],
        "parents": [
            "DbConn"
        ],
        "lcom": 1,
        "length": 51,
        "vocabulary": 25,
        "volume": 236.84,
        "difficulty": 5.84,
        "effort": 1383.62,
        "level": 0.17,
        "bugs": 0.08,
        "time": 77,
        "intelligentContent": 40.54,
        "number_operators": 14,
        "number_operands": 37,
        "number_operators_unique": 6,
        "number_operands_unique": 19,
        "cloc": 2,
        "loc": 28,
        "lloc": 26,
        "mi": 72.35,
        "mIwoC": 52.24,
        "commentWeight": 20.12,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 17,
        "totalStructuralComplexity": 16,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 17,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "EasyPeasyICS",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addEvent",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getEvents",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearEvents",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setName",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "render",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 1,
        "ccn": 5,
        "ccnMethodMax": 4,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 149,
        "vocabulary": 43,
        "volume": 808.51,
        "difficulty": 8.19,
        "effort": 6621.07,
        "level": 0.12,
        "bugs": 0.27,
        "time": 368,
        "intelligentContent": 98.73,
        "number_operators": 48,
        "number_operands": 101,
        "number_operators_unique": 6,
        "number_operands_unique": 37,
        "cloc": 63,
        "loc": 130,
        "lloc": 67,
        "mi": 83.2,
        "mIwoC": 39.13,
        "commentWeight": 44.06,
        "kanDefect": 0.59,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 5.29,
        "relativeSystemComplexity": 5.29,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 37,
        "totalSystemComplexity": 37,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "ntlm_sasl_client_class",
        "interface": false,
        "methods": [
            {
                "name": "initialize",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "ASCIIToUnicode",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "typeMsg1",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "NTLMResponse",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "typeMsg3",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "start",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "step",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 8,
        "ccnMethodMax": 4,
        "externals": [],
        "parents": [],
        "lcom": 2,
        "length": 409,
        "vocabulary": 90,
        "volume": 2655.17,
        "difficulty": 27.4,
        "effort": 72751.6,
        "level": 0.04,
        "bugs": 0.89,
        "time": 4042,
        "intelligentContent": 96.9,
        "number_operators": 135,
        "number_operands": 274,
        "number_operators_unique": 15,
        "number_operands_unique": 75,
        "cloc": 0,
        "loc": 109,
        "lloc": 109,
        "mi": 30.5,
        "mIwoC": 30.5,
        "commentWeight": 0,
        "kanDefect": 0.58,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 2.24,
        "relativeSystemComplexity": 27.24,
        "totalStructuralComplexity": 175,
        "totalDataComplexity": 15.67,
        "totalSystemComplexity": 190.67,
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "POP3",
        "interface": false,
        "methods": [
            {
                "name": "popBeforeSmtp",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "authorise",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "connect",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "login",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "disconnect",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getResponse",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sendString",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkResponse",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setError",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getErrors",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "catchWarning",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 11,
        "nbMethods": 10,
        "nbMethodsPrivate": 5,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "ccn": 20,
        "ccnMethodMax": 6,
        "externals": [
            "POP3"
        ],
        "parents": [],
        "lcom": 2,
        "length": 262,
        "vocabulary": 54,
        "volume": 1507.78,
        "difficulty": 17.04,
        "effort": 25697.82,
        "level": 0.06,
        "bugs": 0.5,
        "time": 1428,
        "intelligentContent": 88.47,
        "number_operators": 66,
        "number_operands": 196,
        "number_operators_unique": 8,
        "number_operands_unique": 46,
        "cloc": 205,
        "loc": 361,
        "lloc": 156,
        "mi": 73.2,
        "mIwoC": 27.21,
        "commentWeight": 45.99,
        "kanDefect": 1.64,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 1.92,
        "relativeSystemComplexity": 65.92,
        "totalStructuralComplexity": 704,
        "totalDataComplexity": 21.11,
        "totalSystemComplexity": 725.11,
        "pageRank": 0.75,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "SMTP",
        "interface": false,
        "methods": [
            {
                "name": "edebug",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "connect",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "startTLS",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "authenticate",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "hmac",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "connected",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "close",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "data",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "hello",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sendHello",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "parseHelloFields",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "mail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "quit",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "recipient",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "reset",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sendCommand",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sendAndMail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "verify",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "noop",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "turn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "client_send",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getError",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getServerExtList",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getServerExt",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLastReply",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get_lines",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setVerp",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getVerp",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setError",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDebugOutput",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDebugOutput",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDebugLevel",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDebugLevel",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTimeout",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTimeout",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "errorHandler",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "recordLastTransactionID",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLastTransactionID",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 38,
        "nbMethods": 30,
        "nbMethodsPrivate": 9,
        "nbMethodsPublic": 21,
        "nbMethodsGetter": 8,
        "nbMethodsSetters": 0,
        "ccn": 56,
        "ccnMethodMax": 10,
        "externals": [
            "self",
            "self",
            "self",
            "stdClass",
            "ntlm_sasl_client_class"
        ],
        "parents": [],
        "lcom": 1,
        "length": 1130,
        "vocabulary": 249,
        "volume": 8994.8,
        "difficulty": 37.53,
        "effort": 337600.96,
        "level": 0.03,
        "bugs": 3,
        "time": 18756,
        "intelligentContent": 239.65,
        "number_operators": 315,
        "number_operands": 815,
        "number_operators_unique": 21,
        "number_operands_unique": 228,
        "cloc": 528,
        "loc": 1066,
        "lloc": 538,
        "mi": 49.55,
        "mIwoC": 5.21,
        "commentWeight": 44.34,
        "kanDefect": 6.62,
        "relativeStructuralComplexity": 324,
        "relativeDataComplexity": 3.37,
        "relativeSystemComplexity": 327.37,
        "totalStructuralComplexity": 12312,
        "totalDataComplexity": 128.16,
        "totalSystemComplexity": 12440.16,
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "PHPMailer",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "__destruct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "mailPassthru",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "edebug",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isHTML",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isSMTP",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isMail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isSendmail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isQmail",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addAddress",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addCC",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addBCC",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addReplyTo",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addOrEnqueueAnAddress",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addAnAddress",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "parseAddresses",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setFrom",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLastMessageID",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "validateAddress",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "idnSupported",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "punyencodeAddress",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "send",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "preSend",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "postSend",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sendmailSend",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isShellSafe",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "mailSend",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSMTPInstance",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "smtpSend",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "smtpConnect",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "smtpClose",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLanguage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTranslations",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addrAppend",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addrFormat",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "wrapText",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "utf8CharBoundary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWordWrap",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createHeader",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMailMIME",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSentMIMEMessage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "generateId",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createBody",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBoundary",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "endBoundary",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMessageType",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "headerLine",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "textLine",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addAttachment",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAttachments",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "attachAll",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeFile",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeString",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeHeader",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "hasMultiBytes",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "has8bitChars",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "base64EncodeWrapMB",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeQP",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeQPphp",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "encodeQ",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addStringAttachment",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addEmbeddedImage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addStringEmbeddedImage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "inlineImageExists",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "attachmentExists",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "alternativeExists",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearQueuedAddresses",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearAddresses",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearCCs",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearBCCs",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearReplyTos",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearAllRecipients",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearAttachments",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "clearCustomHeaders",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setError",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "rfcDate",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "serverHostname",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "lang",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isError",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "fixEOL",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addCustomHeader",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCustomHeaders",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "msgHTML",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "html2text",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "_mime_types",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "filenameToType",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "mb_pathinfo",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "set",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "secureHeader",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "normalizeBreaks",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sign",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "DKIM_QP",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "DKIM_Sign",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "DKIM_HeaderC",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "DKIM_BodyC",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "DKIM_Add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "hasLineLongerThanMax",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getToAddresses",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCcAddresses",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBccAddresses",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getReplyToAddresses",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAllRecipientAddresses",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "doCallback",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 103,
        "nbMethods": 94,
        "nbMethodsPrivate": 18,
        "nbMethodsPublic": 76,
        "nbMethodsGetter": 9,
        "nbMethodsSetters": 0,
        "ccn": 246,
        "ccnMethodMax": 19,
        "externals": [
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "self",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "self",
            "phpmailerException",
            "SMTP",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "self",
            "self",
            "self",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException",
            "self",
            "phpmailerException",
            "self",
            "self",
            "self",
            "self",
            "self",
            "self",
            "self",
            "phpmailerException"
        ],
        "parents": [],
        "lcom": 7,
        "length": 4987,
        "vocabulary": 739,
        "volume": 47523.27,
        "difficulty": 72.6,
        "effort": 3450289.82,
        "level": 0.01,
        "bugs": 15.84,
        "time": 191683,
        "intelligentContent": 654.57,
        "number_operators": 1432,
        "number_operands": 3555,
        "number_operators_unique": 29,
        "number_operands_unique": 710,
        "cloc": 1436,
        "loc": 3449,
        "lloc": 2016,
        "mi": 42.06,
        "mIwoC": 0,
        "commentWeight": 42.06,
        "kanDefect": 26.21,
        "relativeStructuralComplexity": 6241,
        "relativeDataComplexity": 1.73,
        "relativeSystemComplexity": 6242.73,
        "totalStructuralComplexity": 642823,
        "totalDataComplexity": 178.09,
        "totalSystemComplexity": 643001.09,
        "pageRank": 0.02,
        "afferentCoupling": 2,
        "efferentCoupling": 3,
        "instability": 0.6,
        "violations": {}
    },
    {
        "name": "phpmailerException",
        "interface": false,
        "methods": [
            {
                "name": "errorMessage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Exception"
        ],
        "parents": [
            "Exception"
        ],
        "lcom": 1,
        "length": 9,
        "vocabulary": 7,
        "volume": 25.27,
        "difficulty": 1.88,
        "effort": 47.37,
        "level": 0.53,
        "bugs": 0.01,
        "time": 3,
        "intelligentContent": 13.48,
        "number_operators": 4,
        "number_operands": 5,
        "number_operators_unique": 3,
        "number_operands_unique": 4,
        "cloc": 8,
        "loc": 17,
        "lloc": 9,
        "mi": 112.91,
        "mIwoC": 69.23,
        "commentWeight": 43.68,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "pageRank": 0.03,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "violations": {}
    },
    {
        "name": "League\\OAuth2\\Client\\Provider\\Google",
        "interface": false,
        "methods": [
            {
                "name": "getBaseAuthorizationUrl",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBaseAccessTokenUrl",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getResourceOwnerDetailsUrl",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAuthorizationParameters",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDefaultScopes",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getScopeSeparator",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkResponse",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createResourceOwner",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 8,
        "nbMethods": 8,
        "nbMethodsPrivate": 5,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 4,
        "ccnMethodMax": 3,
        "externals": [
            "League\\OAuth2\\Client\\Provider\\AbstractProvider",
            "League\\OAuth2\\Client\\Token\\AccessToken",
            "parent",
            "Psr\\Http\\Message\\ResponseInterface",
            "League\\OAuth2\\Client\\Provider\\Exception\\IdentityProviderException",
            "League\\OAuth2\\Client\\Token\\AccessToken",
            "League\\OAuth2\\Client\\Provider\\GoogleUser"
        ],
        "parents": [
            "League\\OAuth2\\Client\\Provider\\AbstractProvider"
        ],
        "lcom": 7,
        "length": 67,
        "vocabulary": 26,
        "volume": 314.93,
        "difficulty": 3.26,
        "effort": 1026.94,
        "level": 0.31,
        "bugs": 0.1,
        "time": 57,
        "intelligentContent": 96.58,
        "number_operators": 17,
        "number_operands": 50,
        "number_operators_unique": 3,
        "number_operands_unique": 23,
        "cloc": 13,
        "loc": 72,
        "lloc": 59,
        "mi": 73.93,
        "mIwoC": 43.34,
        "commentWeight": 30.59,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 2.63,
        "relativeSystemComplexity": 6.63,
        "totalStructuralComplexity": 32,
        "totalDataComplexity": 21,
        "totalSystemComplexity": 53,
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 6,
        "instability": 0.86,
        "violations": {}
    },
    {
        "name": "PHPMailerOAuthGoogle",
        "interface": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getProvider",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGrant",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getToken",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getOauth64",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 3,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "League\\OAuth2\\Client\\Provider\\Google",
            "League\\OAuth2\\Client\\Grant\\RefreshToken"
        ],
        "parents": [],
        "lcom": 1,
        "length": 50,
        "vocabulary": 18,
        "volume": 208.5,
        "difficulty": 3.5,
        "effort": 729.74,
        "level": 0.29,
        "bugs": 0.07,
        "time": 41,
        "intelligentContent": 59.57,
        "number_operators": 15,
        "number_operands": 35,
        "number_operators_unique": 3,
        "number_operands_unique": 15,
        "cloc": 30,
        "loc": 64,
        "lloc": 34,
        "mi": 93.85,
        "mIwoC": 50.22,
        "commentWeight": 43.63,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.96,
        "relativeSystemComplexity": 16.96,
        "totalStructuralComplexity": 80,
        "totalDataComplexity": 4.8,
        "totalSystemComplexity": 84.8,
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "PHPMailerOAuth",
        "interface": false,
        "methods": [
            {
                "name": "getOAUTHInstance",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "smtpConnect",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "ccn": 20,
        "ccnMethodMax": 19,
        "externals": [
            "PHPMailer",
            "PHPMailerOAuthGoogle",
            "phpmailerException",
            "phpmailerException",
            "phpmailerException"
        ],
        "parents": [
            "PHPMailer"
        ],
        "lcom": 1,
        "length": 198,
        "vocabulary": 44,
        "volume": 1080.97,
        "difficulty": 24.94,
        "effort": 26956.63,
        "level": 0.04,
        "bugs": 0.36,
        "time": 1498,
        "intelligentContent": 43.35,
        "number_operators": 65,
        "number_operands": 133,
        "number_operators_unique": 12,
        "number_operands_unique": 32,
        "cloc": 77,
        "loc": 174,
        "lloc": 97,
        "mi": 75.61,
        "mIwoC": 32.73,
        "commentWeight": 42.88,
        "kanDefect": 1.57,
        "relativeStructuralComplexity": 324,
        "relativeDataComplexity": 0.24,
        "relativeSystemComplexity": 324.24,
        "totalStructuralComplexity": 648,
        "totalDataComplexity": 0.47,
        "totalSystemComplexity": 648.47,
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    }
]